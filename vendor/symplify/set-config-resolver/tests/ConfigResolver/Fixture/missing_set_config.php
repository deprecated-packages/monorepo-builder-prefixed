<?php

declare (strict_types=1);
namespace _PhpScoperda849baa4a45;

use _PhpScoperda849baa4a45\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperda849baa4a45\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperda849baa4a45\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperda849baa4a45\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
