<?php

declare (strict_types=1);
namespace _PhpScoper03a47c44ad4f;

use _PhpScoper03a47c44ad4f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper03a47c44ad4f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
