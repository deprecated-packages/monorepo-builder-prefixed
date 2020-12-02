<?php

declare (strict_types=1);
namespace _PhpScoper056b892061ac;

use _PhpScoper056b892061ac\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper056b892061ac\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper056b892061ac\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper056b892061ac\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
