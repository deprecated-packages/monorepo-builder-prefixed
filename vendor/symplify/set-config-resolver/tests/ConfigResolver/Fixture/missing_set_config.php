<?php

declare (strict_types=1);
namespace _PhpScoper12f30d5eda15;

use _PhpScoper12f30d5eda15\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper12f30d5eda15\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper12f30d5eda15\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper12f30d5eda15\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
