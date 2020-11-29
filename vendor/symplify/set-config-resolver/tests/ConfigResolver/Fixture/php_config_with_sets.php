<?php

declare (strict_types=1);
namespace _PhpScoper8a93e17d4d47;

use _PhpScoper8a93e17d4d47\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper8a93e17d4d47\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
