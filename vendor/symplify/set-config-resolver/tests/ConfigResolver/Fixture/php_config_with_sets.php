<?php

declare (strict_types=1);
namespace _PhpScoperf8eaec7affbd;

use _PhpScoperf8eaec7affbd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperf8eaec7affbd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
