<?php

declare (strict_types=1);
namespace _PhpScopere8131a326633;

use _PhpScopere8131a326633\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopere8131a326633\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopere8131a326633\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopere8131a326633\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
