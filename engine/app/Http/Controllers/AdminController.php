<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\JamPraktik;
use App\Models\Klinik;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index() {
        return view('paw-admin.admindash');
    }

    //Klinik
    public function showKlinik() {
        $kliniks = Klinik::all();
        return view('paw-admin.adminklinik', compact('kliniks'));
    }
    public function createKlinik() {
        return view('paw-admin.formklinik');
    }
    public function storeKlinik(Request $request) {
        $validated = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'profile' => 'required',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif',
            'rating' => 'required',
            'harga_rata2' => 'required',
            'patients' => 'required',
        ]);
        $image = $request->file('images');
        $nama_file = time() . '.' . $image->getClientOriginalExtension();
        $image->move('images/clinicpic/', $nama_file);
        
        $klinik = new Klinik();
        $klinik->nama = $request->nama;
        $klinik->alamat = $request->alamat;
        $klinik->profile = $request->profile;
        $klinik->images = $nama_file;
        $klinik->rating = $request->rating;
        $klinik->harga_rata2 = $request->harga_rata2;
        $klinik->patients = $request->patients;
        $klinik->save();
        return redirect()->route('pawcare.adminklinik');
    }
    
    public function editKlinik($id) {
        $klinik = Klinik::findOrFail($id);
        return view('paw-admin.editklinik', compact('klinik'));
    }

    public function updateKlinik(Request $request, $id) {
        $validated = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'profile' => 'required',
            'images' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'rating' => 'required',
            'harga_rata2' => 'required',
            'patients' => 'required',
        ]);
        $image = $request->file('images');
        $nama_file = time() . '.' . $image->getClientOriginalExtension();
        $image->move('images/clinicpic/', $nama_file);

        $klinik = Klinik::findOrFail($id);
        $klinik->nama = $request->nama;
        $klinik->alamat = $request->alamat;
        $klinik->profile = $request->profile;
        $klinik->images = $nama_file;
        $klinik->rating = $request->rating;
        $klinik->harga_rata2 = $request->harga_rata2;
        $klinik->patients = $request->patients;
        $klinik->save();
        return redirect()->route('pawcare.adminklinik');
    }
    public function destroyKlinik($id)
    {
        $klinik = Klinik::findOrFail($id);
        $klinik->delete();
        return redirect()->route('pawcare.adminklinik');
    }


    //Jam Praktik
    public function showJamPraktik() {
        $jamPraktiks = DB::table('jam_praktik')
        ->join('klinik', 'jam_praktik.klinik_id', '=', 'klinik.id' )
        ->select('jam_praktik.*', 'klinik.nama as nama_klinik')
        ->get();
        return view('paw-admin.adminjampraktik', compact('jamPraktiks'));
    }

    public function createJamPraktik()
    {
        $kliniks = Klinik::all();
        return view('paw-admin.formjampraktik', compact('kliniks'));
    }
    public function storeJamPraktik(Request $request)
    {
        $validated = $request->validate([
            'klinik_id' => 'required',
            'mulai' => 'required',
            'selesai' => 'required',
        ]);

        $jamPraktik = new JamPraktik();
        $jamPraktik->klinik_id = $request->klinik_id;
        $jamPraktik->mulai = $request->mulai;
        $jamPraktik->selesai = $request->selesai;
        $jamPraktik->save();
        return redirect()->route('pawcare.adminJamPraktik');
    }
    public function editJamPraktik($id) {
        $jamPraktik = DB::table('jam_praktik')
        ->join('klinik', 'jam_praktik.klinik_id', '=', 'klinik.id' )
        ->select('jam_praktik.*', 'klinik.nama as nama_klinik')
        ->where('jam_praktik.id', $id)
        ->first();
        return view('paw-admin.editjampraktik', compact('jamPraktik'));
    }
    public function updateJamPraktik(Request $request, $id)
    {
        $validated = $request->validate([
            'klinik_id' => 'required',
            'mulai' => 'required',
            'selesai' => 'required',
        ]);

        $jamPraktik = JamPraktik::findOrFail($id);
        $jamPraktik->klinik_id = $request->klinik_id;
        $jamPraktik->mulai = $request->mulai;
        $jamPraktik->selesai = $request->selesai;
        $jamPraktik->save();
        return redirect()->route('pawcare.adminJamPraktik');
    }
    public function destroyJamPraktik($id)
    {
        $jamPraktik = JamPraktik::findOrFail($id);
        $jamPraktik->delete();
        return redirect()->route('pawcare.adminJamPraktik');
    }


    //Users
    public function showUsers()
    {
        $users = User::where('level', '!=', 'admin')->get();
        return view('paw-admin.adminusers', compact('users'));
    }
    public function createUsers()
    {
        return view('paw-admin.formusers');
    }
    public function storeUsers(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'country' => 'required',
            'phoneNumber' => 'required',
            'foto' => 'nullable',
            
        ]);

        if ($request->password !== $request->confirmPassword) {
            Session()->flash('error', 'Konfirmasi Password Tidak Sama');
            return back();
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->level = 'user';
        $user->country = $request->country;
        $user->phoneNumber = $request->phoneNumber;
        if ($request->hasFile('foto')) {
            if ($user->foto) {
                if(file_exists('images/userprofilepic/' . $user->foto)){
                    unlink('images/userprofilepic/' . $user->foto);
                }
            }
            
            $image = $request->file('foto');
            $nama_file = time() . '.' . $image->getClientOriginalExtension();
            $image->move('images/userprofilepic/', $nama_file);
            $user->foto = $nama_file;
        }

        $user->save();
        return redirect()->route('pawcare.adminUsers');
    }
    public function editUsers($id)
    {
        $user = User::findOrFail($id);
        return view('paw-admin.editusers', compact('user'));
    }
    public function updateUsers(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'country' => 'required',
            'phoneNumber' => 'required',
            'foto' => 'nullable',
            
        ]);
    
        if ($request->password !== $request->confirmPassword) {
            Session()->flash('error', 'Konfirmasi Password Tidak Sama');
            return back();
        }
    
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->has('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->level = 'user';
        $user->country = $request->country;
        $user->phoneNumber = $request->phoneNumber;
        if ($request->hasFile('foto')) {
            if ($user->foto) {
                if(file_exists('images/userprofilepic/' . $user->foto)){
                    unlink('images/userprofilepic/' . $user->foto);
                }
            }
            
            $image = $request->file('foto');
            $nama_file = time() . '.' . $image->getClientOriginalExtension();
            $image->move('images/userprofilepic/', $nama_file);
            $user->foto = $nama_file;
        }
    
        $user->save();
        return redirect()->route('pawcare.adminUsers');
    }
    public function destroyUsers($id)
    {
        $User = User::findOrFail($id);
        $User->delete();
        return redirect()->route('pawcare.adminUsers');
    }


    //Appointment
    public function showAppointments() {
        $appointments = DB::table('appointments')
        ->join('users', 'appointments.user_id', '=', 'users.id' )
        ->select('appointments.*', 'users.name as nama_user')
        ->get();
        return view('paw-admin.adminappointment', compact('appointments'));
    }
    public function editAppointments($id)
    {
        $appointment = DB::table('appointments')
        ->join('users', 'appointments.user_id', '=', 'users.id' )
        ->select('appointments.*', 'users.name as nama_user')
        ->where('appointments.id', $id)
        ->first();
        $users = User::where('level', '!=', 'admin')->get();
        return view('paw-admin.formappointment', compact('appointment','users'));
    }
    public function storeAppointments(Request $request, $id)
    {
        $currentDateTime = Carbon::now();
        $appointments = Appointment::findOrFail($id);
        $appointments->user_id = $request->user_id;
        $appointments->nama_klinik = $request->nama_klinik;
        $appointments->kategori = $request->kategori;
        $appointments->complaint = $request->complaint;
        $appointments->jadwal = $request->jadwal;
        $appointments->tanggal_jadwal = $request->tanggal_jadwal;
        $appointments->status = $request->status;
        $appointments->waktu_pembuatan = $currentDateTime->format('H:i:s');
        $appointments->tanggal_pembuatan = $currentDateTime->toDateString();
        $appointments->save();
        return redirect()->route('pawcare.adminAppointments');
    }
    public function destroyAppointments($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();
        return redirect()->route('pawcare.adminAppointments');
    }
}
