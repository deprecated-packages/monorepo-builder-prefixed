<?php

declare (strict_types=1);
namespace _PhpScoperfa8ac9431c57;

use _PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\MonorepoBuilder\\Init\\', __DIR__ . '/../src');
};
