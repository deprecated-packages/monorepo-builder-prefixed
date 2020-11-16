<?php

declare (strict_types=1);
namespace _PhpScoper244a857c31f6;

use _PhpScoper244a857c31f6\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper244a857c31f6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper244a857c31f6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper244a857c31f6\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
