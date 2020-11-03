<?php

declare (strict_types=1);
namespace _PhpScoperf8eaec7affbd;

use _PhpScoperf8eaec7affbd\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperf8eaec7affbd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperf8eaec7affbd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperf8eaec7affbd\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
