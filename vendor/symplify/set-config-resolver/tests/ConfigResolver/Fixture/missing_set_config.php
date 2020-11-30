<?php

declare (strict_types=1);
namespace _PhpScoper2e873f93a162;

use _PhpScoper2e873f93a162\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper2e873f93a162\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper2e873f93a162\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper2e873f93a162\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
