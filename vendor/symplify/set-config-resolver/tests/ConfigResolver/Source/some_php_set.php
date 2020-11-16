<?php

declare (strict_types=1);
namespace _PhpScoperafeb7177e88e;

use _PhpScoperafeb7177e88e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperafeb7177e88e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
