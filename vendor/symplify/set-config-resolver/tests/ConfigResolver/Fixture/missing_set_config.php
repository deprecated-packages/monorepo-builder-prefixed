<?php

declare (strict_types=1);
namespace _PhpScoper437fa56c88e1;

use _PhpScoper437fa56c88e1\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper437fa56c88e1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper437fa56c88e1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper437fa56c88e1\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
