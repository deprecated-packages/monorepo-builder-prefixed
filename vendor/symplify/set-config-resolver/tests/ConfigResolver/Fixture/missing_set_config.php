<?php

declare (strict_types=1);
namespace _PhpScoper8f797d20934a;

use _PhpScoper8f797d20934a\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper8f797d20934a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper8f797d20934a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoper8f797d20934a\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
