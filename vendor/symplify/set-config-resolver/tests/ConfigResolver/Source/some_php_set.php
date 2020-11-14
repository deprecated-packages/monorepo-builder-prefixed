<?php

declare (strict_types=1);
namespace _PhpScoper3901c1bd2445;

use _PhpScoper3901c1bd2445\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper3901c1bd2445\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
