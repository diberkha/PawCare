<?php

namespace App\Http\Controllers;

use App\Models\Klinik;
use Illuminate\Http\Request;

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
            'rating' => 'required',
            'harga_rata2' => 'required',
            'patients' => 'required',
        ]);

        $klinik = new Klinik();
        $klinik->nama = $request->nama;
        $klinik->alamat = $request->alamat;
        $klinik->profile = $request->profile;
        $klinik->rating = $request->rating;
        $klinik->harga_rata2 = $request->harga_rata2;
        $klinik->patients = $request->patients;
        $klinik->save();
        return redirect()->route('pawcare.adminklinik');
    }


}
