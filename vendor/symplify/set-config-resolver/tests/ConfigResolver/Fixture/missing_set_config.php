<?php

declare (strict_types=1);
namespace _PhpScoper2555ca7105f5;

use _PhpScoper2555ca7105f5\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper2555ca7105f5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper2555ca7105f5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper2555ca7105f5\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
