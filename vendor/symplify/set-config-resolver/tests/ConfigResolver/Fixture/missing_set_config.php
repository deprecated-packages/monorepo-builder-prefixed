<?php

declare (strict_types=1);
namespace _PhpScoper09a4cc789a22;

use _PhpScoper09a4cc789a22\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper09a4cc789a22\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper09a4cc789a22\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper09a4cc789a22\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
