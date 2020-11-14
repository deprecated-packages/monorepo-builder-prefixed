<?php

declare (strict_types=1);
namespace _PhpScopera00544d51e07;

use _PhpScopera00544d51e07\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopera00544d51e07\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera00544d51e07\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopera00544d51e07\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
