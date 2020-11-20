<?php

declare (strict_types=1);
namespace _PhpScoperabca9a64438b;

use _PhpScoperabca9a64438b\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperabca9a64438b\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
