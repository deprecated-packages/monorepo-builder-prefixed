<?php

declare (strict_types=1);
namespace _PhpScoperfa7966ff486f;

use _PhpScoperfa7966ff486f\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperfa7966ff486f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperfa7966ff486f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperfa7966ff486f\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
