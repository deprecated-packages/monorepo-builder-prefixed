<?php

declare (strict_types=1);
namespace _PhpScoper95efb8ddea2f;

use _PhpScoper95efb8ddea2f\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper95efb8ddea2f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper95efb8ddea2f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper95efb8ddea2f\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
