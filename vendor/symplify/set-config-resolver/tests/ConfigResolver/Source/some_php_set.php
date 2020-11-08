<?php

declare (strict_types=1);
namespace _PhpScoper3c46f40844ed;

use _PhpScoper3c46f40844ed\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper3c46f40844ed\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
