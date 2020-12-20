<?php

declare (strict_types=1);
namespace _PhpScoper764e721c42e8;

use _PhpScoper764e721c42e8\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper764e721c42e8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper764e721c42e8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper764e721c42e8\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
