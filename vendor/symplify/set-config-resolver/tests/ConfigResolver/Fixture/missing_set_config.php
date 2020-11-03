<?php

declare (strict_types=1);
namespace _PhpScoper84ee03573073;

use _PhpScoper84ee03573073\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper84ee03573073\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper84ee03573073\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper84ee03573073\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
