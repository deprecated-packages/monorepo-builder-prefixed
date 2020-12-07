<?php

declare (strict_types=1);
namespace _PhpScopera8413c4aa124;

use _PhpScopera8413c4aa124\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopera8413c4aa124\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera8413c4aa124\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopera8413c4aa124\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
