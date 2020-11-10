<?php

declare (strict_types=1);
namespace _PhpScoper7371f586a1d2;

use _PhpScoper7371f586a1d2\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper7371f586a1d2\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper7371f586a1d2\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper7371f586a1d2\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
