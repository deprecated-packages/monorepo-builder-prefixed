<?php

declare (strict_types=1);
namespace _PhpScoper4f38ae1287f3;

use _PhpScoper4f38ae1287f3\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper4f38ae1287f3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper4f38ae1287f3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper4f38ae1287f3\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
