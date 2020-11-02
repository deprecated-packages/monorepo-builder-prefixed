<?php

declare (strict_types=1);
namespace _PhpScoperabb8c88e9df1;

use _PhpScoperabb8c88e9df1\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperabb8c88e9df1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperabb8c88e9df1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperabb8c88e9df1\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
