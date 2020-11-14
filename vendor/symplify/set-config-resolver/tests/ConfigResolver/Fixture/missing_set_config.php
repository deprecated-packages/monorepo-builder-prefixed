<?php

declare (strict_types=1);
namespace _PhpScoper3901c1bd2445;

use _PhpScoper3901c1bd2445\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper3901c1bd2445\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper3901c1bd2445\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper3901c1bd2445\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
