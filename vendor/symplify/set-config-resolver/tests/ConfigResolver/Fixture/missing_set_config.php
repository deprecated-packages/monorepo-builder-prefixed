<?php

declare (strict_types=1);
namespace _PhpScoper931cda798d50;

use _PhpScoper931cda798d50\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper931cda798d50\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper931cda798d50\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper931cda798d50\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
