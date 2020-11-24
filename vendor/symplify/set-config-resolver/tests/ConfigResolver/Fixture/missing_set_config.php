<?php

declare (strict_types=1);
namespace _PhpScoper963537526adf;

use _PhpScoper963537526adf\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper963537526adf\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper963537526adf\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper963537526adf\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
