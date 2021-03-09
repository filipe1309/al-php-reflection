<?php

use \Alura\Reflection\ClasseExemplo;

require_once __DIR__ . '/vendor/autoload.php';

$reflectionClass = new ReflectionClass(ClasseExemplo::class);

var_dump($reflectionClass->getMethods(ReflectionMethod::IS_PUBLIC | ReflectionMethod::IS_PROTECTED));

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
