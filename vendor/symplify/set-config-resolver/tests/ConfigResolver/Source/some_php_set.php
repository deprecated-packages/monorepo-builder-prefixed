<?php

declare (strict_types=1);
namespace _PhpScoper1ceaf4cbd5cb;

use _PhpScoper1ceaf4cbd5cb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper1ceaf4cbd5cb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
