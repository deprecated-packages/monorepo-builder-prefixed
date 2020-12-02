<?php

declare (strict_types=1);
namespace _PhpScoper9ea409d355af;

use _PhpScoper9ea409d355af\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper9ea409d355af\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper9ea409d355af\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper9ea409d355af\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
