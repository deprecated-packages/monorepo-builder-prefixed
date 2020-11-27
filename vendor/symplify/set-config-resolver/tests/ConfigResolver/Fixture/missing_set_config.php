<?php

declare (strict_types=1);
namespace _PhpScoperaa2560a8a931;

use _PhpScoperaa2560a8a931\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperaa2560a8a931\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperaa2560a8a931\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperaa2560a8a931\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
