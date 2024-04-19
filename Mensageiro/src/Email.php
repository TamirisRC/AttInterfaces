<?php

namespace App\Src;

class Email implements Mensageiro {
    
    private $mensagem;

    public function enviarMensagem($mensagem){
        echo "Enviando por meio do email para a pessoa: $mensagem\n";
    }

}