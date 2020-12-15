<?php

declare (strict_types=1);
namespace _PhpScoperc7f1624089a3;

use _PhpScoperc7f1624089a3\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperc7f1624089a3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperc7f1624089a3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperc7f1624089a3\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
