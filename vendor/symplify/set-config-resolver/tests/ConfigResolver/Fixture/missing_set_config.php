<?php

declare (strict_types=1);
namespace _PhpScoper1ff8e175c295;

use _PhpScoper1ff8e175c295\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper1ff8e175c295\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper1ff8e175c295\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper1ff8e175c295\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
