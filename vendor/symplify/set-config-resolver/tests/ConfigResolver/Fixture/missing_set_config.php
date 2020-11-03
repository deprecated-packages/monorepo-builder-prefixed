<?php

declare (strict_types=1);
namespace _PhpScopere4e8aecb81b9;

use _PhpScopere4e8aecb81b9\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopere4e8aecb81b9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopere4e8aecb81b9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopere4e8aecb81b9\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
