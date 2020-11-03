<?php

declare (strict_types=1);
namespace _PhpScopere73d4c0b7ec8;

use _PhpScopere73d4c0b7ec8\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopere73d4c0b7ec8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopere73d4c0b7ec8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopere73d4c0b7ec8\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
