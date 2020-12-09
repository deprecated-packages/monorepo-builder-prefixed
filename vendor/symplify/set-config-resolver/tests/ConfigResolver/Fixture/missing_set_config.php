<?php

declare (strict_types=1);
namespace _PhpScoperc86a79e2d6b2;

use _PhpScoperc86a79e2d6b2\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperc86a79e2d6b2\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperc86a79e2d6b2\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperc86a79e2d6b2\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
