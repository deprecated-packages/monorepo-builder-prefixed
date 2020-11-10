<?php

declare (strict_types=1);
namespace _PhpScopera2bd9a9af620;

use _PhpScopera2bd9a9af620\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopera2bd9a9af620\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera2bd9a9af620\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopera2bd9a9af620\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
