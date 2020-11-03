<?php

declare (strict_types=1);
namespace _PhpScoper6b2f62f5c7a4;

use _PhpScoper6b2f62f5c7a4\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper6b2f62f5c7a4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper6b2f62f5c7a4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper6b2f62f5c7a4\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
