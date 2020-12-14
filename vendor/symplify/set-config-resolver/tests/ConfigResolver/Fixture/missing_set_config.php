<?php

declare (strict_types=1);
namespace _PhpScoperdd624bbcb4e5;

use _PhpScoperdd624bbcb4e5\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperdd624bbcb4e5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperdd624bbcb4e5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperdd624bbcb4e5\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
