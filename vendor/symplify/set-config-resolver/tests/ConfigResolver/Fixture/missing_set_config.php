<?php

declare (strict_types=1);
namespace _PhpScoper5f41da07187c;

use _PhpScoper5f41da07187c\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper5f41da07187c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper5f41da07187c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper5f41da07187c\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
