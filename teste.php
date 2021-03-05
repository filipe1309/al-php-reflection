<?php

use Alura\Reflection\ClasseExemplo;

require_once __DIR__ . '/vendor/autoload.php';

echo __LINE__ . PHP_EOL;

$idade = 22;

$variavel = 'idade';

echo $$variavel;

$nomeCompletoClasse = 'Alura\Reflection\ClasseExemplo';
$objeto = new $nomeCompletoClasse();

var_dump($objeto);
