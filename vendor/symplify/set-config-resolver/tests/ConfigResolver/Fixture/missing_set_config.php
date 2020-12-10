<?php

declare (strict_types=1);
namespace _PhpScopere691b6ebfa72;

use _PhpScopere691b6ebfa72\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopere691b6ebfa72\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopere691b6ebfa72\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopere691b6ebfa72\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
