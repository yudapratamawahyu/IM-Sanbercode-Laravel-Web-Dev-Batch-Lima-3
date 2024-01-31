<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register() {
        return view("register.form_register");
    }

    public function daftar_register(Request $request) {
        $namaDepan = $request['fname'];
        $namaBelakang = $request['lname'];
        return view('register.welcome_register', ["namaDepan" => $namaDepan, "namaBelakang" => $namaBelakang]);
    }
}
