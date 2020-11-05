<?php

declare (strict_types=1);
namespace _PhpScoperfd1a6a0ee9af;

use _PhpScoperfd1a6a0ee9af\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperfd1a6a0ee9af\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
