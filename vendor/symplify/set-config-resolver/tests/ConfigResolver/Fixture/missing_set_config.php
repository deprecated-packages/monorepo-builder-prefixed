<?php

declare (strict_types=1);
namespace _PhpScoperc4633daa1458;

use _PhpScoperc4633daa1458\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperc4633daa1458\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperc4633daa1458\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperc4633daa1458\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
