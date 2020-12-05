<?php

declare (strict_types=1);
namespace _PhpScopereaa086e6f852;

use _PhpScopereaa086e6f852\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopereaa086e6f852\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
