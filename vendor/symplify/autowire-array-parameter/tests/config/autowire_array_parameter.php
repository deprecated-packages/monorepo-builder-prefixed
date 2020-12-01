<?php

declare (strict_types=1);
namespace _PhpScoperd8a347ec1761;

use _PhpScoperd8a347ec1761\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperd8a347ec1761\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\AutowireArrayParameter\\Tests\\Source\\', __DIR__ . '/../Source');
};
