<?php

declare (strict_types=1);
namespace _PhpScoperb1086ecf2bcb;

use _PhpScoperb1086ecf2bcb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperb1086ecf2bcb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\AutowireArrayParameter\\Tests\\Source\\', __DIR__ . '/../Source');
};
