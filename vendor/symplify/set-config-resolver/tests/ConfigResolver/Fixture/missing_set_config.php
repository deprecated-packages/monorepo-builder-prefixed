<?php

declare (strict_types=1);
namespace _PhpScopercdfd316eda69;

use _PhpScopercdfd316eda69\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopercdfd316eda69\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopercdfd316eda69\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopercdfd316eda69\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
