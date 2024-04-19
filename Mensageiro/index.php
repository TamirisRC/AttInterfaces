<?php
require 'vendor/autoload.php';
use App\Src\Mensageiro;
use App\Src\Email;
use App\Src\SMS;
use App\Src\Whatsapp;

$Whatsapp = new Whatsapp();
$Whatsapp->enviarMensagem("Carla");

$SMS = new SMS();
$SMS->enviarMensagem("Claudia");

$Email = new Email();
$Email->enviarMensagem("Sofia");