<?php

declare (strict_types=1);
namespace _PhpScoper722a1d9fee2c;

use _PhpScoper722a1d9fee2c\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper722a1d9fee2c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper722a1d9fee2c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper722a1d9fee2c\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
