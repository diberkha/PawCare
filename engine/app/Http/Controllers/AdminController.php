<?php

namespace App\Http\Controllers;

use App\Models\JamPraktik;
use App\Models\Klinik;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index() {
        return view('paw-admin.admindash');
    }
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
        $klinik = Klinik::all();
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



    public function showUsers()
    {
        $users = User::where('level', '!=', 'admin')->get();
        return view('paw-admin.adminusers', compact('users'));
    }
    public function createUsers()
    {
        return view('paw-admin.formusers');
    }
}
