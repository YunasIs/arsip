<?php

namespace App\Http\Controllers;

class RegistrationController extends Controller
{
    public function index() {
        return view('auth.registration',[
            'title' => 'Registrasi'
        ]);
    }
}