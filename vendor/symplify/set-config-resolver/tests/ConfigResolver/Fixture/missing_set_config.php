<?php

declare (strict_types=1);
namespace _PhpScoper68d19594b147;

use _PhpScoper68d19594b147\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper68d19594b147\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper68d19594b147\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper68d19594b147\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
