<?php

declare (strict_types=1);
namespace _PhpScopera3403994bd90;

use _PhpScopera3403994bd90\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopera3403994bd90\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera3403994bd90\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopera3403994bd90\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
