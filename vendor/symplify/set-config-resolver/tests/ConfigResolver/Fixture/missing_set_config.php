<?php

declare (strict_types=1);
namespace _PhpScoper6cc1788cdd91;

use _PhpScoper6cc1788cdd91\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper6cc1788cdd91\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper6cc1788cdd91\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper6cc1788cdd91\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
