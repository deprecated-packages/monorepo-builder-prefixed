<?php

declare (strict_types=1);
namespace _PhpScoper96a284484937;

use _PhpScoper96a284484937\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper96a284484937\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
