<?php

declare (strict_types=1);
namespace _PhpScoperac0a9a33ae94;

use _PhpScoperac0a9a33ae94\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperac0a9a33ae94\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperac0a9a33ae94\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperac0a9a33ae94\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
