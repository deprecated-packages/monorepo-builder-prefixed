<?php

declare (strict_types=1);
namespace _PhpScoper53a6895b9c5b;

use _PhpScoper53a6895b9c5b\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper53a6895b9c5b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper53a6895b9c5b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper53a6895b9c5b\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
