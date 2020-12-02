<?php

declare (strict_types=1);
namespace _PhpScoper0c743797b8e7;

use _PhpScoper0c743797b8e7\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper0c743797b8e7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper0c743797b8e7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper0c743797b8e7\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
