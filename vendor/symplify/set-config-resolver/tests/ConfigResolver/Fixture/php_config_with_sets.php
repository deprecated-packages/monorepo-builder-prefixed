<?php

declare (strict_types=1);
namespace _PhpScoper9ca278c9ad44;

use _PhpScoper9ca278c9ad44\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper9ca278c9ad44\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
