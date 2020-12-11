<?php

declare (strict_types=1);
namespace _PhpScoperbecbc4cd500f;

use _PhpScoperbecbc4cd500f\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperbecbc4cd500f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperbecbc4cd500f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperbecbc4cd500f\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
