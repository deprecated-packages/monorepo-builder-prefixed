<?php

declare (strict_types=1);
namespace _PhpScoper96a284484937;

use _PhpScoper96a284484937\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper96a284484937\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\MonorepoBuilder\\Merge\\', __DIR__ . '/../src');
};
