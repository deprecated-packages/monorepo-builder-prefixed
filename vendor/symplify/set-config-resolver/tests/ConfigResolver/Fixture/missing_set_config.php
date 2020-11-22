<?php

declare (strict_types=1);
namespace _PhpScoper36654c852ab2;

use _PhpScoper36654c852ab2\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper36654c852ab2\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper36654c852ab2\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper36654c852ab2\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
