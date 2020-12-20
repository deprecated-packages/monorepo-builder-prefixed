<?php

declare (strict_types=1);
namespace _PhpScoper32df52184457;

use _PhpScoper32df52184457\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper32df52184457\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper32df52184457\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper32df52184457\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
