<?php

declare (strict_types=1);
namespace _PhpScoperaff2103cee1d;

use _PhpScoperaff2103cee1d\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperaff2103cee1d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperaff2103cee1d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperaff2103cee1d\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
