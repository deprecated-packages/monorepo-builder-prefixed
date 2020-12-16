<?php

declare (strict_types=1);
namespace _PhpScoperfec5e512f2f8;

use _PhpScoperfec5e512f2f8\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperfec5e512f2f8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperfec5e512f2f8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperfec5e512f2f8\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
