<?php

declare (strict_types=1);
namespace _PhpScoperf9ff1c3447b1;

use _PhpScoperf9ff1c3447b1\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperf9ff1c3447b1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperf9ff1c3447b1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperf9ff1c3447b1\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
