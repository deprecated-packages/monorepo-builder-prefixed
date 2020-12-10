<?php

declare (strict_types=1);
namespace _PhpScoper9e8360c7485e;

use _PhpScoper9e8360c7485e\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper9e8360c7485e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper9e8360c7485e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper9e8360c7485e\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
