<?php

declare (strict_types=1);
namespace _PhpScoperbb737891eded;

use _PhpScoperbb737891eded\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperbb737891eded\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperbb737891eded\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperbb737891eded\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
