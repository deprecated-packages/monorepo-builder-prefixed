<?php

declare (strict_types=1);
namespace _PhpScoper59bf8deb8cc1;

use _PhpScoper59bf8deb8cc1\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper59bf8deb8cc1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper59bf8deb8cc1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper59bf8deb8cc1\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
