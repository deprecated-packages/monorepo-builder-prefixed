<?php

declare (strict_types=1);
namespace _PhpScoper00f012948171;

use _PhpScoper00f012948171\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper00f012948171\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper00f012948171\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper00f012948171\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
