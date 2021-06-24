<?php

namespace App\Controlador;

use App\Modelo\Diaria as ModeloDiaria;

class Diaria
{
    public function listar()
    {
        $diarias = ModeloDiaria::obterTodas();

        require_once(__DIR__ . '/../../visualizacao/listar_diarias.php');
    }
}