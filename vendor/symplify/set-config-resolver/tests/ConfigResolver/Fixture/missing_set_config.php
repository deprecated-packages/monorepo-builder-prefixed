<?php

declare (strict_types=1);
namespace _PhpScoper717b2838a41b;

use _PhpScoper717b2838a41b\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper717b2838a41b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper717b2838a41b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper717b2838a41b\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
