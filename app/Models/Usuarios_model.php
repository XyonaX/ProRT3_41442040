<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuarios_model extends Model
{
    protected $table      = 'usuarios';
    protected $primaryKey = 'usuario_id';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['usuario_nombre', 'usuario_apellido', 'usuario_email', 'usuario_pass'];
    protected $returnType     = 'array';


}
