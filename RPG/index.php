<?php

require __DIR__ . '../vendor/autoload.php';

use App\Src\Guerreiro;
use App\Src\Mago;
use App\Src\Arqueiro;
use App\Src\Personagem;

function executaAtaque(Personagem $personagem) {
    $personagem->personagemAtacar();
}

$guerreiro = new Guerreiro();
$mago = new Mago();
$arqueiro = new Arqueiro();

executaAtaque($guerreiro);
executaAtaque($mago);
executaAtaque($arqueiro); 
