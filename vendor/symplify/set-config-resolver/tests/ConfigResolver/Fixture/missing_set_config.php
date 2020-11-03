<?php

declare (strict_types=1);
namespace _PhpScopera2c403aec9a8;

use _PhpScopera2c403aec9a8\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopera2c403aec9a8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera2c403aec9a8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopera2c403aec9a8\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
