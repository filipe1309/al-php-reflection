<?php

use \Alura\Reflection\ClasseExemplo;

require_once __DIR__ . '/vendor/autoload.php';

$reflectionClass = new ReflectionClass(ClasseExemplo::class);

// $objetoClasseExemplo = $reflectionClass->newInstance(1, 2);
// $objetoClasseExemplo = $reflectionClass->newInstanceWithoutConstructor();
$objetoClasseExemplo = $reflectionClass->newInstanceArgs([1, 2]);

var_dump($objetoClasseExemplo);
