<?php

declare (strict_types=1);
namespace _PhpScoper323d4c178bee;

use _PhpScoper323d4c178bee\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper323d4c178bee\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper323d4c178bee\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper323d4c178bee\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
