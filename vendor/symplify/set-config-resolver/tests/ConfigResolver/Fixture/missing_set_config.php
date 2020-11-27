<?php

declare (strict_types=1);
namespace _PhpScoper5818bcaf1010;

use _PhpScoper5818bcaf1010\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper5818bcaf1010\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper5818bcaf1010\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper5818bcaf1010\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
