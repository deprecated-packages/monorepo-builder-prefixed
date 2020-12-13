<?php

declare (strict_types=1);
namespace _PhpScoper290ab17573f9;

use _PhpScoper290ab17573f9\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper290ab17573f9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper290ab17573f9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper290ab17573f9\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
