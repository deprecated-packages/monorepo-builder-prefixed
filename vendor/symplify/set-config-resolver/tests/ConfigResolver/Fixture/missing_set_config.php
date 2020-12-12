<?php

declare (strict_types=1);
namespace _PhpScoperc693a7d83f11;

use _PhpScoperc693a7d83f11\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperc693a7d83f11\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperc693a7d83f11\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperc693a7d83f11\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
