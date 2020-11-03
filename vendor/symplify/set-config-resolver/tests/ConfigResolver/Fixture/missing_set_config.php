<?php

declare (strict_types=1);
namespace _PhpScoperddf2171d3d2c;

use _PhpScoperddf2171d3d2c\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperddf2171d3d2c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperddf2171d3d2c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperddf2171d3d2c\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
