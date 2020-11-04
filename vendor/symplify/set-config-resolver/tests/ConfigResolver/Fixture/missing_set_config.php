<?php

declare (strict_types=1);
namespace _PhpScoper130e101f3ca6;

use _PhpScoper130e101f3ca6\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper130e101f3ca6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper130e101f3ca6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper130e101f3ca6\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
