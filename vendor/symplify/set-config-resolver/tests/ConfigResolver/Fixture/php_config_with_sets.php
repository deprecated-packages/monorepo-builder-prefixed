<?php

declare (strict_types=1);
namespace _PhpScoper9a38f5ee6cbc;

use _PhpScoper9a38f5ee6cbc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper9a38f5ee6cbc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
