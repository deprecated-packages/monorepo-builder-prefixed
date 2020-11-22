<?php

declare (strict_types=1);
namespace _PhpScoper51570eac51fe;

use _PhpScoper51570eac51fe\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper51570eac51fe\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper51570eac51fe\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper51570eac51fe\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
