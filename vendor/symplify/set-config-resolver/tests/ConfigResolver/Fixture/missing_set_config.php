<?php

declare (strict_types=1);
namespace _PhpScoperf701e46e48a5;

use _PhpScoperf701e46e48a5\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperf701e46e48a5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperf701e46e48a5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperf701e46e48a5\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
