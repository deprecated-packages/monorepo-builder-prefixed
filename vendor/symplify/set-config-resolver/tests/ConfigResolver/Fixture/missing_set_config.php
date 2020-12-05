<?php

declare (strict_types=1);
namespace _PhpScoperbd03d493ccc6;

use _PhpScoperbd03d493ccc6\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperbd03d493ccc6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperbd03d493ccc6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperbd03d493ccc6\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
