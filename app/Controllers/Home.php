<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $session = session();
        $data['isLoggedIn'] = $session->get('isLoggedIn');
        $data['rol_id'] = $session->get('rol_id');
        $data['usuario_nombre'] = $session->get('usuario_nombre');
        $data['titulo'] = 'Inicio';
        return view('templates/header', $data) . view('index') . view('templates/footer');
    }

    public function registro_index(): string
    {
        $session = session();
        $data['isLoggedIn'] = $session->get('isLoggedIn');
        $data['rol_id'] = $session->get('rol_id');
        $data['usuario_nombre'] = $session->get('usuario_nombre');
        $data['titulo'] = 'Registro';
        return view('templates/header', $data) . view('registro') . view('templates/footer');
    }
    public function login_index(): string
    {
        $session = session();
        $data['isLoggedIn'] = $session->get('isLoggedIn');
        $data['rol_id'] = $session->get('rol_id');
        $data['usuario_nombre'] = $session->get('usuario_nombre');
        $data['titulo'] = 'Login';
        return view('templates/header', $data) . view('login') . view('templates/footer');
    }
    public function quienesSomos_index(): string
    {
        $session = session();
        $data['isLoggedIn'] = $session->get('isLoggedIn');
        $data['rol_id'] = $session->get('rol_id');
        $data['usuario_nombre'] = $session->get('usuario_nombre');
        $data['titulo'] = 'Quienes Somos';
        return view('templates/header', $data) . view('quienesSomos') . view('templates/footer');
    }
    public function acercade_index(): string
    {
        $session = session();
        $data['isLoggedIn'] = $session->get('isLoggedIn');
        $data['rol_id'] = $session->get('rol_id');
        $data['usuario_nombre'] = $session->get('usuario_nombre');
        $data['titulo'] = 'Acerca de nosotros';
        return view('templates/header', $data) . view('acercade') . view('templates/footer');
    }
}
