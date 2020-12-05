<?php

declare (strict_types=1);
namespace _PhpScoperd607abf1de8e;

use _PhpScoperd607abf1de8e\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperd607abf1de8e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperd607abf1de8e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperd607abf1de8e\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
