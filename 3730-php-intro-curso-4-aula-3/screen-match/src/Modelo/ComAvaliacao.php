<?php

namespace ScreenMatch\Modelo;



trait ComAvaliacao
{
    private array $notas = [];

    /**
     * @throws \InvalidArgumentException se nao está entre 0 e 10 da erro
     */
    public function avalia(float $nota): void
    {   
        if($nota < 0 | $nota > 10){
            throw new \InvalidArgumentException('cu de frango, quando dizemos avalia... é de 0 a 10');
        }
        $this->notas[] = $nota;
    }

    public function media(): float
    {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }
}
