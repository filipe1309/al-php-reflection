<?php

namespace Alura\Reflection;

final class ClasseExemplo implements \JsonSerializable
{
    public string $propriedadePublica = 'publica';
    protected string $propriedadeProtegida = 'protegida';
    private string $propriedadePrivada = 'privada';

    public function __construct()
    {
        echo 'Executando construtor de ' . __CLASS__;
    }

    public function metodoPublico(string $mensagem, int $num = 42): void
    {
        echo 'Executando método público: ' . $mensagem . ', ' .  $num;
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

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
