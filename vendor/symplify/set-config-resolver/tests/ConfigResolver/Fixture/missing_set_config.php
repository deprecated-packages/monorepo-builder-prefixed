<?php

declare (strict_types=1);
namespace _PhpScoper650fbdd90fa0;

use _PhpScoper650fbdd90fa0\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper650fbdd90fa0\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper650fbdd90fa0\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper650fbdd90fa0\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
