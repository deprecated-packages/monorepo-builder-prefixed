<?php

declare (strict_types=1);
namespace _PhpScoper77bdbacdc821;

use _PhpScoper77bdbacdc821\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper77bdbacdc821\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper77bdbacdc821\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper77bdbacdc821\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
