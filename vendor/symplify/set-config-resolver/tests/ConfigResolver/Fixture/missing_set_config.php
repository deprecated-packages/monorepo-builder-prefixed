<?php

declare (strict_types=1);
namespace _PhpScoper058a557299a1;

use _PhpScoper058a557299a1\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper058a557299a1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper058a557299a1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper058a557299a1\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
