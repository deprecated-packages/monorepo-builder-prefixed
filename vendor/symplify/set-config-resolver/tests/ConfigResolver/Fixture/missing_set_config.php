<?php

declare (strict_types=1);
namespace _PhpScoper6d6fbd28d6a9;

use _PhpScoper6d6fbd28d6a9\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper6d6fbd28d6a9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper6d6fbd28d6a9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper6d6fbd28d6a9\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
