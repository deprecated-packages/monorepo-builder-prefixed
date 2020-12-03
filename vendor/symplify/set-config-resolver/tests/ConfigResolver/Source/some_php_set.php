<?php

declare (strict_types=1);
namespace _PhpScoper6c30e6f631ea;

use _PhpScoper6c30e6f631ea\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper6c30e6f631ea\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
