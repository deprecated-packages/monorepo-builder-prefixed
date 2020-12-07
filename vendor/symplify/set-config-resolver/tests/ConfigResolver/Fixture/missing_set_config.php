<?php

declare (strict_types=1);
namespace _PhpScoperdab52924cf3e;

use _PhpScoperdab52924cf3e\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperdab52924cf3e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperdab52924cf3e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperdab52924cf3e\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
