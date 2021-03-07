<?php

use \Alura\Reflection\ClasseExemplo;

require_once __DIR__ . '/vendor/autoload.php';

$reflectionClass = new ReflectionClass(ClasseExemplo::class);

// $interfaces = $reflectionClass->getInterfaceNames();
// $interfaces = $reflectionClass->getInterfaces();

// $nomeClasse = $reflectionClass->getName();
// $objeto = new $nomeClasse;

$modifiers = $reflectionClass->getModifiers();
$modifierNames = Reflection::getModifierNames($modifiers);

// $objetoClasseExemplo = $reflectionClass->newInstance(1, 2);
// $objetoClasseExemplo = $reflectionClass->newInstanceWithoutConstructor();
// $objetoClasseExemplo = $reflectionClass->newInstanceArgs([1, 2]);

$objetoClasseExemplo = $reflectionClass->newInstance();

// var_dump($objetoClasseExemplo);

// echo json_encode($objetoClasseExemplo);
