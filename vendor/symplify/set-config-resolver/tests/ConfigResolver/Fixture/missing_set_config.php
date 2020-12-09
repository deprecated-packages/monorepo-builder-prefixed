<?php

declare (strict_types=1);
namespace _PhpScoper62cf10e7b378;

use _PhpScoper62cf10e7b378\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper62cf10e7b378\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper62cf10e7b378\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper62cf10e7b378\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
