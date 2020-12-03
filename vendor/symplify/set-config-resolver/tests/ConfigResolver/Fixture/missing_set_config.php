<?php

declare (strict_types=1);
namespace _PhpScoper3bda9af7e0fd;

use _PhpScoper3bda9af7e0fd\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper3bda9af7e0fd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper3bda9af7e0fd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper3bda9af7e0fd\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
