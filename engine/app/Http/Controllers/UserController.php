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
}
