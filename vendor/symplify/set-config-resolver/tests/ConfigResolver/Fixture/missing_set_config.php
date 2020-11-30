<?php

declare (strict_types=1);
namespace _PhpScoper0ad68a106f23;

use _PhpScoper0ad68a106f23\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper0ad68a106f23\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper0ad68a106f23\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper0ad68a106f23\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
