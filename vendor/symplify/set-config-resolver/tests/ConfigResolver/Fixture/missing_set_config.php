<?php

declare (strict_types=1);
namespace _PhpScopere97aad8070b4;

use _PhpScopere97aad8070b4\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopere97aad8070b4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopere97aad8070b4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopere97aad8070b4\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
