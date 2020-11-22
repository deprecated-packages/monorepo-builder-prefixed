<?php

declare (strict_types=1);
namespace _PhpScopera4d786bbd33f;

use _PhpScopera4d786bbd33f\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopera4d786bbd33f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera4d786bbd33f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopera4d786bbd33f\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
