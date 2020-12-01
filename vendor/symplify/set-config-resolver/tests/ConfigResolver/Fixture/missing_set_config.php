<?php

declare (strict_types=1);
namespace _PhpScoper46d05083fbc3;

use _PhpScoper46d05083fbc3\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper46d05083fbc3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper46d05083fbc3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper46d05083fbc3\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
