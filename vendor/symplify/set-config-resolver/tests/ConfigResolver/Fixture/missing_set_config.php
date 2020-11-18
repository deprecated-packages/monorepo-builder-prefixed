<?php

declare (strict_types=1);
namespace _PhpScoper600b802aef08;

use _PhpScoper600b802aef08\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper600b802aef08\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper600b802aef08\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper600b802aef08\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
