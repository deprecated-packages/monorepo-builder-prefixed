<?php

declare (strict_types=1);
namespace _PhpScoper30f4a2553084;

use _PhpScoper30f4a2553084\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper30f4a2553084\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper30f4a2553084\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper30f4a2553084\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
