<?php

declare (strict_types=1);
namespace _PhpScoper9022b927643b;

use _PhpScoper9022b927643b\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper9022b927643b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper9022b927643b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper9022b927643b\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
