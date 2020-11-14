<?php

declare (strict_types=1);
namespace _PhpScoper120e1a259c7c;

use _PhpScoper120e1a259c7c\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper120e1a259c7c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper120e1a259c7c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper120e1a259c7c\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
