<?php

declare (strict_types=1);
namespace _PhpScoper641780a4edd2;

use _PhpScoper641780a4edd2\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper641780a4edd2\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper641780a4edd2\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper641780a4edd2\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
