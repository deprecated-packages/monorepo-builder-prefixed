<?php

declare (strict_types=1);
namespace _PhpScoperabb8c88e9df1;

use _PhpScoperabb8c88e9df1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperabb8c88e9df1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
