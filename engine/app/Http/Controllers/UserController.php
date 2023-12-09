<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        return view('paw-user.index');
    }
    public function home() {
        return view('paw-user.home');
    }
    public function appointment() {
        return view('paw-user.appointment');
    }
    public function myprofile() {
        return view('paw-user.myprofile');
    }
}
