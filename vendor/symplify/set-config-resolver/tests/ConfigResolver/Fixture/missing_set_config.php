<?php

declare (strict_types=1);
namespace _PhpScoper22d98a58be40;

use _PhpScoper22d98a58be40\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper22d98a58be40\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper22d98a58be40\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper22d98a58be40\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
