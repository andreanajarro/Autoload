<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\services\UsuarioService;

$service = new UsuarioService();

$usuario = $service->crearUsuario("Andy");

echo "Nombre: " . $usuario->getNombre();