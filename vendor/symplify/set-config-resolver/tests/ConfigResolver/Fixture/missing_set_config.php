<?php

declare (strict_types=1);
namespace _PhpScoperdf352df6d893;

use _PhpScoperdf352df6d893\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperdf352df6d893\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperdf352df6d893\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperdf352df6d893\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
