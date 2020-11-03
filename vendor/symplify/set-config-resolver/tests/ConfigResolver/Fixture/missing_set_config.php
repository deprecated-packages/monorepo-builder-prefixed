<?php

declare (strict_types=1);
namespace _PhpScoper0d74dc701629;

use _PhpScoper0d74dc701629\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper0d74dc701629\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper0d74dc701629\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper0d74dc701629\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
