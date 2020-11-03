<?php

declare (strict_types=1);
namespace _PhpScopere57ee17947a3;

use _PhpScopere57ee17947a3\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopere57ee17947a3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopere57ee17947a3\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
