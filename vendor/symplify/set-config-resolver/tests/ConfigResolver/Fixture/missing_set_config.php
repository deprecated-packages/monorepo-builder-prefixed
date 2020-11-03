<?php

declare (strict_types=1);
namespace _PhpScoper30e4ccea42bd;

use _PhpScoper30e4ccea42bd\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper30e4ccea42bd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper30e4ccea42bd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper30e4ccea42bd\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
