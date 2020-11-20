<?php

declare (strict_types=1);
namespace _PhpScopercdc90a6628b6;

use _PhpScopercdc90a6628b6\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopercdc90a6628b6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopercdc90a6628b6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopercdc90a6628b6\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
