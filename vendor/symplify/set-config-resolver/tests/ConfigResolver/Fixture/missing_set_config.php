<?php

declare (strict_types=1);
namespace _PhpScoperee3ad0c2c096;

use _PhpScoperee3ad0c2c096\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperee3ad0c2c096\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperee3ad0c2c096\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperee3ad0c2c096\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
