<?php

declare (strict_types=1);
namespace _PhpScopereb7fcd8f999a;

use _PhpScopereb7fcd8f999a\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScopereb7fcd8f999a\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
