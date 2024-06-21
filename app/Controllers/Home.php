<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('templates/header').view('index').view('templates/footer');
    }

    public function registro_index(): string {
        return view('templates/header').view('registro').view('templates/footer');
    }
    public function login_index(): string {
        return view('templates/header').view('login').view('templates/footer');
    }
    public function quienesSomos_index(): string {
        return view('templates/header').view('quienesSomos').view('templates/footer');
    }
    public function acercade_index(): string {
        return view('templates/header').view('acercade').view('templates/footer');
    }
}
