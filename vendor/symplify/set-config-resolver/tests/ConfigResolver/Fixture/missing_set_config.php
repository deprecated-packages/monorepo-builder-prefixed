<?php

declare (strict_types=1);
namespace _PhpScoper79999b045682;

use _PhpScoper79999b045682\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper79999b045682\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper79999b045682\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper79999b045682\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
