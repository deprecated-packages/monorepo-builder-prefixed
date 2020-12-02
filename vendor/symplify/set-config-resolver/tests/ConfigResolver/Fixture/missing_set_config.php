<?php

declare (strict_types=1);
namespace _PhpScopera2ff5fd2b59c;

use _PhpScopera2ff5fd2b59c\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopera2ff5fd2b59c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera2ff5fd2b59c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopera2ff5fd2b59c\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
