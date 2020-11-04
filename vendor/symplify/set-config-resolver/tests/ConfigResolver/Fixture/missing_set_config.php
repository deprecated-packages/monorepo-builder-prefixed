<?php

declare (strict_types=1);
namespace _PhpScoperce084f4275dd;

use _PhpScoperce084f4275dd\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperce084f4275dd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperce084f4275dd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperce084f4275dd\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
