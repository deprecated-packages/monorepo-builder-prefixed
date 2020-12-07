<?php

declare (strict_types=1);
namespace _PhpScoper94f327c48d46;

use _PhpScoper94f327c48d46\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper94f327c48d46\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper94f327c48d46\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper94f327c48d46\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
