<?php

declare (strict_types=1);
namespace _PhpScopereb9e28d9f307;

use _PhpScopereb9e28d9f307\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopereb9e28d9f307\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopereb9e28d9f307\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopereb9e28d9f307\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
