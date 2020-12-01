<?php

declare (strict_types=1);
namespace _PhpScoperd8a347ec1761;

use _PhpScoperd8a347ec1761\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperd8a347ec1761\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperd8a347ec1761\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperd8a347ec1761\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
