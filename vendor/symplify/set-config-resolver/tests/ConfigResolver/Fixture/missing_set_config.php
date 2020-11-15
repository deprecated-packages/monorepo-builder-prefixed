<?php

declare (strict_types=1);
namespace _PhpScoper7606a7c2799b;

use _PhpScoper7606a7c2799b\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper7606a7c2799b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper7606a7c2799b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper7606a7c2799b\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
