<?php

declare (strict_types=1);
namespace _PhpScoper227dea868235;

use _PhpScoper227dea868235\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper227dea868235\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper227dea868235\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper227dea868235\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
