<?php

declare (strict_types=1);
namespace _PhpScoper897dcdb71069;

use _PhpScoper897dcdb71069\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper897dcdb71069\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper897dcdb71069\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper897dcdb71069\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
