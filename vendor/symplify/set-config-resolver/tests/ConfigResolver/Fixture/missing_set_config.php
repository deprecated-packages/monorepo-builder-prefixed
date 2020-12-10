<?php

declare (strict_types=1);
namespace _PhpScoper88e2bb777a57;

use _PhpScoper88e2bb777a57\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper88e2bb777a57\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper88e2bb777a57\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper88e2bb777a57\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
