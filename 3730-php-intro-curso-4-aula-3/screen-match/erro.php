<?php

use ScreenMatch\Calculos\ConversorNotaEstrela;
use ScreenMatch\Modelo\Genero;
use ScreenMatch\Modelo\Serie;
use ScreenMatch\Modelo\Episodio;

require 'autoload.php';

$serie = new Serie('californication', 2002, Genero::Comedia, 7, 12, 32);
$episodio = new Episodio($serie, 'fuckin and punching', 10); 
try {

    $episodio->avalia(11);
    $episodio->avalia(-1);
    
    $conversor = new ConversorNotaEstrela();
    $avalicaçãoEstrelar = $conversor->converte($episodio);
    echo $avalicaçãoEstrelar    ;
}catch(Exception $e){
    echo "caraio, deu erro: " . $e->getMessage();
}