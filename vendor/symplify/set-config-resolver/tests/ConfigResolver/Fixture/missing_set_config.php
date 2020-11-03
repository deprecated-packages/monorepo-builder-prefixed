<?php

declare (strict_types=1);
namespace _PhpScoper503cab241f82;

use _PhpScoper503cab241f82\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper503cab241f82\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper503cab241f82\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper503cab241f82\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
