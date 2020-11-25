<?php

declare (strict_types=1);
namespace _PhpScopera5e5d165d78c;

use _PhpScopera5e5d165d78c\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopera5e5d165d78c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera5e5d165d78c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopera5e5d165d78c\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
