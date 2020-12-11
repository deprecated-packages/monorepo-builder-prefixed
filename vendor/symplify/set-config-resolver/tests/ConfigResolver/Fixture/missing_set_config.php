<?php

declare (strict_types=1);
namespace _PhpScoper018f70acf6cc;

use _PhpScoper018f70acf6cc\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper018f70acf6cc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper018f70acf6cc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper018f70acf6cc\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
