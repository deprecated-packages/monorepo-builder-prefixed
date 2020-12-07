<?php

declare (strict_types=1);
namespace _PhpScopereb7fcd8f999a;

use _PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopereb7fcd8f999a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
