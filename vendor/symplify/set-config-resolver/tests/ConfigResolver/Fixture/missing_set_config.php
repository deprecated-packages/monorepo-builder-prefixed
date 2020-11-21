<?php

declare (strict_types=1);
namespace _PhpScoperdbf49b510e11;

use _PhpScoperdbf49b510e11\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperdbf49b510e11\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperdbf49b510e11\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperdbf49b510e11\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
