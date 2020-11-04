<?php

declare (strict_types=1);
namespace _PhpScopere32570efa19a;

use _PhpScopere32570efa19a\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopere32570efa19a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopere32570efa19a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopere32570efa19a\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
