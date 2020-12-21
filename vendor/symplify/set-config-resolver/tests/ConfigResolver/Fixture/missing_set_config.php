<?php

declare (strict_types=1);
namespace _PhpScoperb397db9687c8;

use _PhpScoperb397db9687c8\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperb397db9687c8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperb397db9687c8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperb397db9687c8\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
