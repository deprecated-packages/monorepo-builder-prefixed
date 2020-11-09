<?php

declare (strict_types=1);
namespace _PhpScopere9939b84e968;

use _PhpScopere9939b84e968\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopere9939b84e968\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopere9939b84e968\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopere9939b84e968\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
