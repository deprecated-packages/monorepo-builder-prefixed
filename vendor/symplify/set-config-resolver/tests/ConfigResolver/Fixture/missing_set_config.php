<?php

declare (strict_types=1);
namespace _PhpScoper29d04ea58d14;

use _PhpScoper29d04ea58d14\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper29d04ea58d14\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper29d04ea58d14\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper29d04ea58d14\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
