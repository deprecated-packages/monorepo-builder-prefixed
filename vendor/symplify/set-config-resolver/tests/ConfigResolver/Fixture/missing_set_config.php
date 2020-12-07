<?php

declare (strict_types=1);
namespace _PhpScoperab93339c6bca;

use _PhpScoperab93339c6bca\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperab93339c6bca\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
