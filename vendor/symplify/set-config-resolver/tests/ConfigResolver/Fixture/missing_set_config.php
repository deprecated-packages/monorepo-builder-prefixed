<?php

declare (strict_types=1);
namespace _PhpScoperb1086ecf2bcb;

use _PhpScoperb1086ecf2bcb\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperb1086ecf2bcb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperb1086ecf2bcb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperb1086ecf2bcb\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
