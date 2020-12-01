<?php

declare (strict_types=1);
namespace _PhpScoper8293d234e7ed;

use _PhpScoper8293d234e7ed\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper8293d234e7ed\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper8293d234e7ed\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper8293d234e7ed\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
