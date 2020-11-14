<?php

declare (strict_types=1);
namespace _PhpScopera2f1d1d42b88;

use _PhpScopera2f1d1d42b88\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopera2f1d1d42b88\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera2f1d1d42b88\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopera2f1d1d42b88\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
