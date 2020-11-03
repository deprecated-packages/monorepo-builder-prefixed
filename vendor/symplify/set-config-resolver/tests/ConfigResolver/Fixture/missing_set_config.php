<?php

declare (strict_types=1);
namespace _PhpScoper61d2aa534566;

use _PhpScoper61d2aa534566\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper61d2aa534566\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper61d2aa534566\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper61d2aa534566\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
