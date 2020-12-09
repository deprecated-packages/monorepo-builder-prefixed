<?php

declare (strict_types=1);
namespace _PhpScoperaf523e5605cc;

use _PhpScoperaf523e5605cc\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperaf523e5605cc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperaf523e5605cc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperaf523e5605cc\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
