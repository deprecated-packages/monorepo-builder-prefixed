<?php

declare (strict_types=1);
namespace _PhpScoper27e2e7523871;

use _PhpScoper27e2e7523871\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper27e2e7523871\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper27e2e7523871\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper27e2e7523871\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
