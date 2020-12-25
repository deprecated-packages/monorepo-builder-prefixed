<?php

declare (strict_types=1);
namespace _PhpScoper95e170f0b4ac;

use _PhpScoper95e170f0b4ac\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper95e170f0b4ac\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper95e170f0b4ac\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper95e170f0b4ac\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
