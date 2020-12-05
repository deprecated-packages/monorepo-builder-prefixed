<?php

declare (strict_types=1);
namespace _PhpScoper37b79542cc43;

use _PhpScoper37b79542cc43\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper37b79542cc43\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper37b79542cc43\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper37b79542cc43\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
