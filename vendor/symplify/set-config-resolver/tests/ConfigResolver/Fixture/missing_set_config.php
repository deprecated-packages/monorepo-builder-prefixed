<?php

declare (strict_types=1);
namespace _PhpScoper204b3b8f3e0d;

use _PhpScoper204b3b8f3e0d\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper204b3b8f3e0d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper204b3b8f3e0d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper204b3b8f3e0d\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
