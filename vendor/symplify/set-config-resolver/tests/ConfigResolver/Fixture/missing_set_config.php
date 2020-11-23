<?php

declare (strict_types=1);
namespace _PhpScopere3ed9f66440c;

use _PhpScopere3ed9f66440c\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopere3ed9f66440c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopere3ed9f66440c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopere3ed9f66440c\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
