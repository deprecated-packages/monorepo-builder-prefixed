<?php

declare (strict_types=1);
namespace _PhpScoper5da899d87662;

use _PhpScoper5da899d87662\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper5da899d87662\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper5da899d87662\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper5da899d87662\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
