<?php

declare (strict_types=1);
namespace _PhpScopere10afbb60721;

use _PhpScopere10afbb60721\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopere10afbb60721\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopere10afbb60721\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopere10afbb60721\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
