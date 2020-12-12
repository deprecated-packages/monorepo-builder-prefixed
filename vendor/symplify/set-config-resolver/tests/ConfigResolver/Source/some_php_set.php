<?php

declare (strict_types=1);
namespace _PhpScoper7cc068f3f5d1;

use _PhpScoper7cc068f3f5d1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper7cc068f3f5d1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
