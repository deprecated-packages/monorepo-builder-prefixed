<?php

declare (strict_types=1);
namespace _PhpScoper9693ff52999d;

use _PhpScoper9693ff52999d\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper9693ff52999d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper9693ff52999d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper9693ff52999d\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
