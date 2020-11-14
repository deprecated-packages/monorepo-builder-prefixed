<?php

declare (strict_types=1);
namespace _PhpScoper5861d582764b;

use _PhpScoper5861d582764b\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper5861d582764b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper5861d582764b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper5861d582764b\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
