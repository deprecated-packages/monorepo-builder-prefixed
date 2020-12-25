<?php

declare (strict_types=1);
namespace _PhpScoper43009128da38;

use _PhpScoper43009128da38\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper43009128da38\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper43009128da38\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper43009128da38\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
