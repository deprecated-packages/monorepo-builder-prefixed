<?php

declare (strict_types=1);
namespace _PhpScoper912e6d747d7e;

use _PhpScoper912e6d747d7e\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper912e6d747d7e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper912e6d747d7e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper912e6d747d7e\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
