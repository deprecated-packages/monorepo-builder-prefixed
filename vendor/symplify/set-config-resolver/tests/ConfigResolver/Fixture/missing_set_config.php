<?php

declare (strict_types=1);
namespace _PhpScoper3b1a4d12ef28;

use _PhpScoper3b1a4d12ef28\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper3b1a4d12ef28\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper3b1a4d12ef28\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper3b1a4d12ef28\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
