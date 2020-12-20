<?php

declare (strict_types=1);
namespace _PhpScoper03a47c44ad4f;

use _PhpScoper03a47c44ad4f\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper03a47c44ad4f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper03a47c44ad4f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper03a47c44ad4f\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
