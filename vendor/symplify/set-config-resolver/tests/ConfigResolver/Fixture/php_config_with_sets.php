<?php

declare (strict_types=1);
namespace _PhpScoper34ecf47f3155;

use _PhpScoper34ecf47f3155\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper34ecf47f3155\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
