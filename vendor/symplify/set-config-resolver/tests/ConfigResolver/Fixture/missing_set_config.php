<?php

declare (strict_types=1);
namespace _PhpScopercd844fca8af3;

use _PhpScopercd844fca8af3\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopercd844fca8af3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopercd844fca8af3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopercd844fca8af3\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
