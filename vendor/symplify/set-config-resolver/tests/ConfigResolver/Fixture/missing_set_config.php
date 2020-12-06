<?php

declare (strict_types=1);
namespace _PhpScoper96a284484937;

use _PhpScoper96a284484937\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper96a284484937\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper96a284484937\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper96a284484937\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
