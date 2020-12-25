<?php

declare (strict_types=1);
namespace _PhpScoperff72c38d4e2a;

use _PhpScoperff72c38d4e2a\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperff72c38d4e2a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperff72c38d4e2a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperff72c38d4e2a\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
