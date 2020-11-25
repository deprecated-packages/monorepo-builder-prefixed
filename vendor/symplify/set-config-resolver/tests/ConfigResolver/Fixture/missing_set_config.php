<?php

declare (strict_types=1);
namespace _PhpScoper54d694ea578e;

use _PhpScoper54d694ea578e\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper54d694ea578e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper54d694ea578e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper54d694ea578e\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
