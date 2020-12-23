<?php

declare (strict_types=1);
namespace _PhpScopere6d124d1f7ba;

use _PhpScopere6d124d1f7ba\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopere6d124d1f7ba\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopere6d124d1f7ba\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopere6d124d1f7ba\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
