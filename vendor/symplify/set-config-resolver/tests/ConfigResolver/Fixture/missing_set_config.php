<?php

declare (strict_types=1);
namespace _PhpScoper674b08d66902;

use _PhpScoper674b08d66902\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper674b08d66902\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper674b08d66902\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper674b08d66902\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
