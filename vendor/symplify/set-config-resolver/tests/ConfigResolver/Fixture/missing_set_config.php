<?php

declare (strict_types=1);
namespace _PhpScoperef4638f5d8b1;

use _PhpScoperef4638f5d8b1\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperef4638f5d8b1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperef4638f5d8b1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperef4638f5d8b1\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
