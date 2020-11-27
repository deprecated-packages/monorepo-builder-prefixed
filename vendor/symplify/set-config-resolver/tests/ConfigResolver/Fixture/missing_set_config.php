<?php

declare (strict_types=1);
namespace _PhpScoper7d1be3c5de07;

use _PhpScoper7d1be3c5de07\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper7d1be3c5de07\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper7d1be3c5de07\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper7d1be3c5de07\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
