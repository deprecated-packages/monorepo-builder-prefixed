<?php

declare (strict_types=1);
namespace _PhpScoperbc89827b806f;

use _PhpScoperbc89827b806f\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperbc89827b806f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperbc89827b806f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperbc89827b806f\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
