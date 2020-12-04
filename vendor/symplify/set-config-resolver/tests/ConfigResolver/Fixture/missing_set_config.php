<?php

declare (strict_types=1);
namespace _PhpScoper56e9de378e59;

use _PhpScoper56e9de378e59\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper56e9de378e59\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper56e9de378e59\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper56e9de378e59\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
