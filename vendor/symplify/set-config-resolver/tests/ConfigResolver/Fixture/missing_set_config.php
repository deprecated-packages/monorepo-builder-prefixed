<?php

declare (strict_types=1);
namespace _PhpScoper76c4aa553101;

use _PhpScoper76c4aa553101\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper76c4aa553101\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper76c4aa553101\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper76c4aa553101\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
