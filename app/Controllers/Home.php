<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['titulo'] = 'Inicio';
        return view('templates/header',$data).view('index').view('templates/footer');
    }

    public function registro_index(): string {
        $data['titulo'] = 'Registro';
        return view('templates/header',$data).view('registro').view('templates/footer');
    }
    public function login_index(): string {
        $data['titulo'] = 'Login';
        return view('templates/header',$data).view('login').view('templates/footer');
    }
    public function quienesSomos_index(): string {
        $data['titulo'] = 'Quienes Somos';
        return view('templates/header',$data).view('quienesSomos').view('templates/footer');
    }
    public function acercade_index(): string {
        $data['titulo'] = 'Acerca de nosotros';
        return view('templates/header',$data).view('acercade').view('templates/footer');
    }
}
