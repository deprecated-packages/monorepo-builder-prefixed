<?php

declare (strict_types=1);
namespace _PhpScoperd410cf9baa15;

use _PhpScoperd410cf9baa15\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperd410cf9baa15\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperd410cf9baa15\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperd410cf9baa15\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
