<?php

declare (strict_types=1);
namespace _PhpScoperf237fc62366a;

use _PhpScoperf237fc62366a\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperf237fc62366a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperf237fc62366a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperf237fc62366a\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
