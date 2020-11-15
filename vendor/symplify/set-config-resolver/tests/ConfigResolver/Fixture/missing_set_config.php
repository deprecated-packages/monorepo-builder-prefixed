<?php

declare (strict_types=1);
namespace _PhpScoperb25e75e9febe;

use _PhpScoperb25e75e9febe\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperb25e75e9febe\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperb25e75e9febe\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperb25e75e9febe\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
