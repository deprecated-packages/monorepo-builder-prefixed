<?php

declare (strict_types=1);
namespace _PhpScoper621122bdc380;

use _PhpScoper621122bdc380\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper621122bdc380\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper621122bdc380\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper621122bdc380\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
