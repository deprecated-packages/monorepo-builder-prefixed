<?php

declare (strict_types=1);
namespace _PhpScopera85504f0ea7b;

use _PhpScopera85504f0ea7b\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopera85504f0ea7b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera85504f0ea7b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopera85504f0ea7b\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
