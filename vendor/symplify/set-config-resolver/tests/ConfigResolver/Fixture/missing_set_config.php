<?php

declare (strict_types=1);
namespace _PhpScoperfa8ac9431c57;

use _PhpScoperfa8ac9431c57\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperfa8ac9431c57\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
