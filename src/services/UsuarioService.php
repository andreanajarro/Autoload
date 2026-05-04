<?php

namespace App\services;

use App\models\Usuario;

class UsuarioService {

    public function crearUsuario($nombre) {
        return new Usuario($nombre);
    }
}