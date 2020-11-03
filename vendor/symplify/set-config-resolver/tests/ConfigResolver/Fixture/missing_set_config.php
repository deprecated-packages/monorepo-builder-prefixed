<?php

declare (strict_types=1);
namespace _PhpScoper131024327b3f;

use _PhpScoper131024327b3f\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper131024327b3f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper131024327b3f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper131024327b3f\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
