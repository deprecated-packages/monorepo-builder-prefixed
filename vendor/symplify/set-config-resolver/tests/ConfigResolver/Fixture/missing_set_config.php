<?php

declare (strict_types=1);
namespace _PhpScopercd5c1af09a49;

use _PhpScopercd5c1af09a49\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopercd5c1af09a49\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopercd5c1af09a49\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopercd5c1af09a49\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
