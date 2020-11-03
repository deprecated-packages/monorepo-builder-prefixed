<?php

declare (strict_types=1);
namespace _PhpScoper462f168ef4cc;

use _PhpScoper462f168ef4cc\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper462f168ef4cc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper462f168ef4cc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper462f168ef4cc\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
