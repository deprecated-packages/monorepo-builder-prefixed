<?php

declare (strict_types=1);
namespace _PhpScopere1b4619561f2;

use _PhpScopere1b4619561f2\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopere1b4619561f2\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopere1b4619561f2\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopere1b4619561f2\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
