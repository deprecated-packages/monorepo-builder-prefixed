<?php

declare (strict_types=1);
namespace _PhpScoperb15c77d6bb3b;

use _PhpScoperb15c77d6bb3b\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperb15c77d6bb3b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperb15c77d6bb3b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperb15c77d6bb3b\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
