<?php

declare (strict_types=1);
namespace _PhpScopereaa2cae8e093;

use _PhpScopereaa2cae8e093\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopereaa2cae8e093\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopereaa2cae8e093\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopereaa2cae8e093\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
