<?php

declare (strict_types=1);
namespace _PhpScoper593efff6d962;

use _PhpScoper593efff6d962\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper593efff6d962\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper593efff6d962\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper593efff6d962\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
