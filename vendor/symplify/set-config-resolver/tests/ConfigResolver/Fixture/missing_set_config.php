<?php

declare (strict_types=1);
namespace _PhpScoper184bc0c88d68;

use _PhpScoper184bc0c88d68\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper184bc0c88d68\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper184bc0c88d68\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper184bc0c88d68\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
