<?php

namespace App\Src;

class Whatsapp implements Mensageiro {
    
    private $mensagem;

    public function enviarMensagem($mensagem){
        echo "Enviando mensagem por meio do Whatsapp para a pessoa: $mensagem\n";
    }

}