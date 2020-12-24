<?php

declare (strict_types=1);
namespace _PhpScoper68e56c1b5bd9;

use _PhpScoper68e56c1b5bd9\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper68e56c1b5bd9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper68e56c1b5bd9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper68e56c1b5bd9\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
