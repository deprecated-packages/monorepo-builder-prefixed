<?php

declare (strict_types=1);
namespace _PhpScopere7b233920bf2;

use _PhpScopere7b233920bf2\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopere7b233920bf2\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopere7b233920bf2\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopere7b233920bf2\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
