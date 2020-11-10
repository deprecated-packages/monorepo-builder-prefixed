<?php

declare (strict_types=1);
namespace _PhpScopera31d0d6ff47a;

use _PhpScopera31d0d6ff47a\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopera31d0d6ff47a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera31d0d6ff47a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopera31d0d6ff47a\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
