<?php

declare (strict_types=1);
namespace _PhpScoper69b0f14b2eca;

use _PhpScoper69b0f14b2eca\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper69b0f14b2eca\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper69b0f14b2eca\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper69b0f14b2eca\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
