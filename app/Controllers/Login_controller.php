<?php

namespace App\Controllers;

use App\Models\Usuarios_model;


class Login_controller extends BaseController
{

    public function login_user()
    {
        $request = \Config\Services::request();
        $userModel = new Usuarios_model();

        $email = $request->getPost('email');
        $pass = $request->getPost('password');

        $usuarioEncontrado = $userModel->where('usuario_email', $email)->first();

        if ($usuarioEncontrado) {
            if (password_verify($pass, $usuarioEncontrado['usuario_pass']) || $pass === $usuarioEncontrado['usuario_pass']) {
                $session = session();
                $session->set([
                    'usuario_id' => $usuarioEncontrado['usuario_id'],
                    'usuario_nombre' => $usuarioEncontrado['usuario_nombre'],
                    'usuario_apellido' => $usuarioEncontrado['usuario_apellido'],
                    'usuario_email' => $usuarioEncontrado['usuario_email'],
                    'rol_id' => $usuarioEncontrado['rol_id'],
                    'usuario_estado' => $usuarioEncontrado['usuario_estado'],
                    'isLoggedIn' => true,
                ]);
                $session->setFlashdata('message', '¡Inicio de sesión exitoso!');
                return redirect()->to('/');
            }
        }
        return redirect()->to('/login')->with('err', 'Correo electrónico o contraseña incorrectos.');
    }
}
