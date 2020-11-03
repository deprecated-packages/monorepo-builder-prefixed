<?php

declare (strict_types=1);
namespace _PhpScoper37887d2f9246;

use _PhpScoper37887d2f9246\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper37887d2f9246\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper37887d2f9246\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper37887d2f9246\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
