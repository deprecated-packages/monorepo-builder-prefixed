<?php

declare (strict_types=1);
namespace _PhpScoper97d4f3c5628a;

use _PhpScoper97d4f3c5628a\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper97d4f3c5628a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper97d4f3c5628a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper97d4f3c5628a\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
