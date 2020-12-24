<?php

declare (strict_types=1);
namespace _PhpScoper7aa910bab0da;

use _PhpScoper7aa910bab0da\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper7aa910bab0da\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper7aa910bab0da\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper7aa910bab0da\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
