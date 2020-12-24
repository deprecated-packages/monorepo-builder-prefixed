<?php

declare (strict_types=1);
namespace _PhpScoper2f9b0ac741dd;

use _PhpScoper2f9b0ac741dd\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper2f9b0ac741dd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper2f9b0ac741dd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper2f9b0ac741dd\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
