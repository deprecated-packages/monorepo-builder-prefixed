<?php

declare (strict_types=1);
namespace _PhpScoper5665d3e54f4c;

use _PhpScoper5665d3e54f4c\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper5665d3e54f4c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper5665d3e54f4c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper5665d3e54f4c\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
