<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Klinik;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('paw-user.index');
    }
    public function about()
    {
        return view('paw-user.about');
    }
    public function contact()
    {
        return view('paw-user.contact');
    }
    public function service()
    {
        return view('paw-user.service');
    }
    public function home()
    {
        return view('paw-user.home');
    }
    public function appointment($id)
    {
        $klinik = Klinik::with('jamPraktik')->findOrFail($id);
        return view('paw-user.appointment', compact('klinik'));
    }
    public function createappointment(Request $request)
    {
        $currentDateTime = Carbon::now();
        $user = auth()->user();
        $appointment = new Appointment();
        $appointment->user_id = $user->id;
        $appointment->nama_klinik = $request->nama_klinik;
        $appointment->kategori = $request->kategori;
        $appointment->complaint = $request->complaint;
        $appointment->jadwal = $request->jadwal;
        $appointment->tanggal_jadwal = $request->tanggal_jadwal;
        $appointment->status = 'Pending';
        $appointment->waktu_pembuatan = $currentDateTime->format('H:i:s');
        $appointment->tanggal_pembuatan = $currentDateTime->toDateString();
        $appointment->save();
        return view('paw-user.finishappointment');
    }
    public function cliniclist()
    {
        $kliniks = Klinik::with('jamPraktik')->get();
        return view('paw-user.cliniclist', compact('kliniks'));
    }
    public function clinicdetails($id)
    {
        $klinik = Klinik::with('jamPraktik')->findOrFail($id);
        return view('paw-user.clinicdetails', compact('klinik'));
    }
    public function myprofile()
    {
        return view('paw-user.myprofile');
    }
    public function confirmuser()
    {
        return view('paw-user.confirmuser');
    }
    public function activity()
    {
        $user = auth()->user();
        $appointments = $user->appointments;
        return view('paw-user.activity', compact('appointments'));
    }
}
