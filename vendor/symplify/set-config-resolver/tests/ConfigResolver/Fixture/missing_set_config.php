<?php

declare (strict_types=1);
namespace _PhpScoper23507306fdfc;

use _PhpScoper23507306fdfc\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper23507306fdfc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper23507306fdfc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper23507306fdfc\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
