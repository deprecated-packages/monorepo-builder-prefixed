<?php

declare (strict_types=1);
namespace _PhpScoperab3ccffcffcd;

use _PhpScoperab3ccffcffcd\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperab3ccffcffcd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperab3ccffcffcd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperab3ccffcffcd\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
