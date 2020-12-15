<?php

declare (strict_types=1);
namespace _PhpScoperd79f30a2f8be;

use _PhpScoperd79f30a2f8be\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperd79f30a2f8be\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperd79f30a2f8be\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperd79f30a2f8be\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
