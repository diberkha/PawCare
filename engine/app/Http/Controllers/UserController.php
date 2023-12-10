<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function confirmuser() {
        return view('paw-user.confirmuser');
    }
    public function petform() {
        return view('paw-user.petform');
    }
}
