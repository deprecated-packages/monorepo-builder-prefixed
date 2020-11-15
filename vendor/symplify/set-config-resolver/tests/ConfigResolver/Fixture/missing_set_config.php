<?php

declare (strict_types=1);
namespace _PhpScoper31a2d0e8f655;

use _PhpScoper31a2d0e8f655\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper31a2d0e8f655\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper31a2d0e8f655\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper31a2d0e8f655\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
