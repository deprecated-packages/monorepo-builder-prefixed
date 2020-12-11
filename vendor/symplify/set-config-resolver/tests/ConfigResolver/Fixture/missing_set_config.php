<?php

declare (strict_types=1);
namespace _PhpScoper654dfdb702e5;

use _PhpScoper654dfdb702e5\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper654dfdb702e5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper654dfdb702e5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper654dfdb702e5\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
