<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('paw-admin.admindash');
    }
    public function showprofile() {
        $users = User::all();
        return view('paw-admin.admindash', compact('users'));
    }
}
