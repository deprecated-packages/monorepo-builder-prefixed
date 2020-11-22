<?php

declare (strict_types=1);
namespace _PhpScoper66a1b4bf441c;

use _PhpScoper66a1b4bf441c\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper66a1b4bf441c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper66a1b4bf441c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper66a1b4bf441c\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
