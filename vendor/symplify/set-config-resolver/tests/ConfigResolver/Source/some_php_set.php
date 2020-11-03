<?php

declare (strict_types=1);
namespace _PhpScoper4c089bfbbc1b;

use _PhpScoper4c089bfbbc1b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper4c089bfbbc1b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
