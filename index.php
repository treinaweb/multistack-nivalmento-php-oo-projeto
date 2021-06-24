<?php

require_once('vendor/autoload.php');

use App\Controlador\Diarista;
use App\Modelo\Diarista as DiaristaModelo;
use App\Modelo\Cliente;
use App\Modelo\Diaria;

$d = new Diarista;

$diarista = new DiaristaModelo;
$diarista->nome = 'João';

$cliente = new Cliente;
$cliente->nomeCompleto = 'Maria';

$diaria = new Diaria('01/10/2021', 8, $diarista, $cliente);
var_dump($diaria);