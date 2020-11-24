<?php

declare (strict_types=1);
namespace _PhpScoper0f23ef1f1d10;

use _PhpScoper0f23ef1f1d10\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper0f23ef1f1d10\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper0f23ef1f1d10\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper0f23ef1f1d10\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
