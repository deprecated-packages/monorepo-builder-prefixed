<?php

declare (strict_types=1);
namespace _PhpScoper472361b15529;

use _PhpScoper472361b15529\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper472361b15529\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper472361b15529\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper472361b15529\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
