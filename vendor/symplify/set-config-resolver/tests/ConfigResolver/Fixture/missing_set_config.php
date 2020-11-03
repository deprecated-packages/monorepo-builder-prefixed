<?php

declare (strict_types=1);
namespace _PhpScoper62894f8143f4;

use _PhpScoper62894f8143f4\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper62894f8143f4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper62894f8143f4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper62894f8143f4\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
