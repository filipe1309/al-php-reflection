<?php

use \Alura\Reflection\ClasseExemplo;

require_once __DIR__ . '/vendor/autoload.php';

$reflectionClass = new ReflectionClass(ClasseExemplo::class);

$propriedadePublica = $reflectionClass->getProperty('propriedadePublica');
var_dump($propriedadePublica->getAttributes());
var_dump($propriedadePublica->getAttributes()[0]->newInstance());
var_dump($propriedadePublica->getAttributes()[0]->getArguments());
var_dump($propriedadePublica->getAttributes()[0]->getName());
