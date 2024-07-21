<?php

namespace App\Controllers;
use App\Models\Usuarios_model;


class UsuariosController extends BaseController
{


    public function registro_usuario(){
        $validation = \Config\Services::validation();
        $request = \Config\Services::request();
        $usuarioModel = new Usuarios_model();


        $validation->setRules(
            [
                'nombre' => 'required|max_length[150]',
                'apellido' => 'required|max_length[100]',
                'email' => 'required|valid_email|is_unique[usuarios.usuario_email]',
                'password' => 'required|max_length[50]|min_length[8]',
                're-password' => 'required|matches[password]|max_length[50]|min_length[8]',
            ],
            [
                'nombre' => [
                    'required' => 'El nombre es requerido',
                    'max_length' => 'Has superado el maximo de caracteres (150)',
                ],
                'apellido' => [
                    'required' => 'El apellido es requerido',
                    'max_length' => 'Has superado el maximo de caracteres (100)',
                ],
                'email' => [
                    'required' => 'El email es requerido',
                    'valid_email' => 'Tiene que ser un correo valido',
                    'is_unique' => 'El correo electrónico ya está registrado',
                ],
                'password' => [
                    'required' => 'La contraseña es requerida',
                    'max_length' => 'Has superado el maximo de caracteres (50)',
                    'min_length' => 'La contraseña debe tener minimo 8 caracteres',
                ],
                're-password' => [
                    'required' => 'La contraseña es requerida',
                    'max_length' => 'Has superado el maximo de caracteres (50)',
                    'min_length' => 'La contraseña debe tener minimo 8 caracteres',
                    'matches' => 'Las contraseñas no coinciden',
                ],
            ]
        );

        if ($validation->withRequest($request)->run()) {
            $data = [
                'rol_id' => 2,
                'usuario_nombre' => $request->getPost('nombre'),
                'usuario_apellido' => $request->getPost('apellido'),
                'usuario_email' => $request->getPost('email'),
                'usuario_pass' => password_hash($request->getPost('password'), PASSWORD_DEFAULT),
                'usuario_estado' => 1,
            ];

            $usuarioModel->insert($data);

            return redirect()->route('registro')->with('message', 'Se ha registrado correctamente!');
        }

        $data['titulo'] = 'Registro';
        $data['validation'] = $validation->getErrors();

        return view('templates/header', $data)
        . view('registro', $data)
        . view('templates/footer');
    }


    public function logout_user()
    {
        $session = session();
        $session->destroy();

        return redirect()->to('/')->with('message', 'Sesión cerrada correctamente.');
    }

    public function listar_usuarios()
    {   
        $userModel = new Usuarios_model();
        $pager = \Config\Services::pager();
        $request = \Config\Services::request();
    
        $session = session();
        $data['isLoggedIn'] = $session->get('isLoggedIn');
        $data['rol_id'] = $session->get('rol_id');
        $data['usuario_nombre'] = $session->get('usuario_nombre');
    
        $perPage = 5; // Número de usuarios por página
        $currentPage = $request->getVar('page') ?: 1;
    
        $usuarios = $userModel->paginate($perPage, 'default', $currentPage);
        $pager = $userModel->pager;
        $pager->setPath('listar_usuarios'); // Ruta personalizada
    
        $data['titulo'] = 'Listado de Usuarios';
        $data['usuarios'] = $usuarios;
        $data['pager'] = $pager;
    
        return view('templates/header', $data)
            . view('listar_usuarios', $data)
            . view('templates/footer');
    }
    


    public function toggle_estado($usuarioId)
    {
        $userModel = new Usuarios_model();
        $usuario = $userModel->find($usuarioId);

        if ($usuario) {
            $nuevoEstado = $usuario['usuario_estado'] == 1 ? 0 : 1;
            $userModel->update($usuarioId, ['usuario_estado' => $nuevoEstado]);
            return redirect()->to('/ver_usuarios')->with('message', 'Estado del usuario actualizado correctamente');
        } else {
            return redirect()->to('/ver_usuarios')->with('err', 'Usuario no encontrado');
        }
    }

    public function editar_usuario($usuarioId)
    {
        $userModel = new Usuarios_model();
        $usuario = $userModel->find($usuarioId);

        if (!$usuario) {
            return redirect()->to('/ver_usuarios')->with('err', 'Usuario no encontrado');
        }

        $session = session();
        $data['isLoggedIn'] = $session->get('isLoggedIn');
        $data['rol_id'] = $session->get('rol_id');
        $data['usuario_nombre'] = $session->get('usuario_nombre');
        $data['titulo'] = 'Editar Usuario';
        $data['usuario'] = $usuario;

        return view('templates/header', $data)
            . view('editar_usuario', $data)
            . view('templates/footer');
    }

    public function actualizar_usuario($usuarioId)
    {
        $validation = \Config\Services::validation();
        $request = \Config\Services::request();
        $userModel = new Usuarios_model();

        $validation->setRules(
            [
                'nombre' => 'required|max_length[150]',
                'apellido' => 'required|max_length[100]',
                'email' => 'required|valid_email',
                'estado' => 'required|in_list[0,1]',
            ],
            [
                'nombre' => [
                    'required' => 'El nombre es requerido',
                    'max_length' => 'Has superado el maximo de caracteres (150)',
                ],
                'apellido' => [
                    'required' => 'El apellido es requerido',
                    'max_length' => 'Has superado el maximo de caracteres (100)',
                ],
                'email' => [
                    'required' => 'El email es requerido',
                    'valid_email' => 'Tiene que ser un correo valido',
                ],
                'estado' => [
                    'required' => 'El estado es requerido',
                    'in_list' => 'Estado inválido',
                ],
            ]
        );

        if ($validation->withRequest($request)->run()) {
            $data = [
                'usuario_nombre' => $request->getPost('nombre'),
                'usuario_apellido' => $request->getPost('apellido'),
                'usuario_email' => $request->getPost('email'),
                'usuario_estado' => $request->getPost('estado'),
            ];

            $userModel->update($usuarioId, $data);

            return redirect()->to('/ver_usuarios')->with('message', 'Usuario actualizado correctamente');
        }

        return redirect()->to('/usuarios/editar/' . $usuarioId)->withInput()->with('validation', $validation->getErrors());
    }

}
