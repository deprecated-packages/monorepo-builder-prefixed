<?php

declare (strict_types=1);
namespace _PhpScoperdd9048e10aae;

use _PhpScoperdd9048e10aae\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperdd9048e10aae\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
