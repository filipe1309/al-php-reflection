<?php

namespace Alura\Reflection;

class ClasseExemplo
{
    public string $propriedadePublica = 'publica';
    protected string $propriedadeProtegida = 'protegida';
    private string $propriedadePrivada = 'privada';

    public function __construct($param1, $param2)
    {
        echo 'Executando construtor de ' . __CLASS__;
    }

    public function metodoPublico(): void
    {
        echo 'Executando método público';
    }

    protected function metodoProtegido(): int
    {
        echo 'Executando método protegido';
        return 1;
    }

    private function metodoPrivado(int $a): void
    {
        echo 'Executando método privado';
    }
}
