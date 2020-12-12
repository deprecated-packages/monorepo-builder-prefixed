<?php

declare (strict_types=1);
namespace _PhpScoperad5317739bda;

use _PhpScoperad5317739bda\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperad5317739bda\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperad5317739bda\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperad5317739bda\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
