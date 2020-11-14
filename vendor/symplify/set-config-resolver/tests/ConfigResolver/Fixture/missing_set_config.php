<?php

declare (strict_types=1);
namespace _PhpScopera3f2f7450f99;

use _PhpScopera3f2f7450f99\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopera3f2f7450f99\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera3f2f7450f99\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopera3f2f7450f99\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
