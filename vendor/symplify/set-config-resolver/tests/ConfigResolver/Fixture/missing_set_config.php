<?php

declare (strict_types=1);
namespace _PhpScoper4c229f9734b6;

use _PhpScoper4c229f9734b6\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper4c229f9734b6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper4c229f9734b6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper4c229f9734b6\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
