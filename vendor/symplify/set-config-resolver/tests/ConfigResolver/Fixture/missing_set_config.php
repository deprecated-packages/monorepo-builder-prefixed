<?php

declare (strict_types=1);
namespace _PhpScoper47ce95ac3375;

use _PhpScoper47ce95ac3375\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper47ce95ac3375\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper47ce95ac3375\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper47ce95ac3375\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
