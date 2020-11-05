<?php

declare (strict_types=1);
namespace _PhpScoper6713430bfe3d;

use _PhpScoper6713430bfe3d\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper6713430bfe3d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper6713430bfe3d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper6713430bfe3d\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
