<?php

declare (strict_types=1);
namespace _PhpScoper34ecf47f3155;

use _PhpScoper34ecf47f3155\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper34ecf47f3155\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper34ecf47f3155\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper34ecf47f3155\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
