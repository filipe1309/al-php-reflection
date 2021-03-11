<?php

use \Alura\Reflection\ClasseExemplo;

require_once __DIR__ . '/vendor/autoload.php';

$reflectionClass = new ReflectionClass(ClasseExemplo::class);

try {
  $propriedadeNaoExiste = $reflectionClass->getProperty('propriedadeNaoExiste');
} catch (\ReflectionException $e) {
  echo $e->getMessage();
}
