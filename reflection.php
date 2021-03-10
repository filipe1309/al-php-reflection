<?php

use \Alura\Reflection\ClasseExemplo;

require_once __DIR__ . '/vendor/autoload.php';

$reflectionClass = new ReflectionClass(ClasseExemplo::class);

// var_dump($reflectionClass->getProperties());
$propriedadePrivada = $reflectionClass->getProperty('propriedadePrivada');
// var_dump($propriedadePrivada);

if (!$propriedadePrivada->isPublic()) {
    $propriedadePrivada->setAccessible(true);
}

var_dump($propriedadePrivada->getValue($reflectionClass->newInstanceWithoutConstructor()));
// var_dump(Reflection::getModifierNames($propriedadePrivada->getModifiers()));

// ------------------------------------------- Methods: --------------------------------
$reflectionMethod = $reflectionClass->getMethod('metodoProtegido');
$reflectionMethod->setAccessible(true);
var_dump($reflectionMethod->invoke($reflectionClass->newInstanceWithoutConstructor()));

/*
// var_dump($reflectionClass->getMethods(ReflectionMethod::IS_PUBLIC | ReflectionMethod::IS_PROTECTED));
$reflectionMethod = $reflectionClass->getMethod('metodoPublico');
// var_dump($reflectionMethod->getNumberOfParameters(), $reflectionMethod->getNumberOfRequiredParameters());
// var_dump($reflectionMethod->getParameters());
$parameters = array_filter(
  $reflectionMethod->getParameters(), 
  fn (ReflectionParameter $param) => !$param->isOptional()
);

// var_dump($parameters);

foreach ($parameters as $parameter) {
  if (!$parameter->hasType()) {
    throw new \DOmainException('Dont know what to do!!');
  }

  $tipo = (string) $parameter->getType();
  var_dump($parameter->getType()->isBuiltin());
}

$objetoClasseExemplo = $reflectionClass->newInstanceWithoutConstructor();

// $reflectionMethod->invoke($objetoClasseExemplo, 'Obrigado pelos peixes', 42);
// $reflectionMethod->invokeArgs($objetoClasseExemplo, ['Obrigado pelos peixes', 42]);


// $interfaces = $reflectionClass->getInterfaceNames();
// $interfaces = $reflectionClass->getInterfaces();

// $nomeClasse = $reflectionClass->getName();
// $objeto = new $nomeClasse;

// $modifiers = $reflectionClass->getModifiers();
// $modifierNames = Reflection::getModifierNames($modifiers);

// $objetoClasseExemplo = $reflectionClass->newInstance(1, 2);
// $objetoClasseExemplo = $reflectionClass->newInstanceWithoutConstructor();
// $objetoClasseExemplo = $reflectionClass->newInstanceArgs([1, 2]);

// $objetoClasseExemplo = $reflectionClass->newInstance();

// var_dump($objetoClasseExemplo);

// echo json_encode($objetoClasseExemplo);
*/