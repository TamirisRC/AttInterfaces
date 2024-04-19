<?php

namespace App\Src;

class SMS implements Mensageiro {
    
    private $mensagem;

    public function enviarMensagem($mensagem){
        echo "Enviando mensagem por meio de SMS para a pessoa: $mensagem\n";
    }

}
