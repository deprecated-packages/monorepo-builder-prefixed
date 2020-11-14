<?php

declare (strict_types=1);
namespace _PhpScoperb2110b0b3130;

use _PhpScoperb2110b0b3130\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperb2110b0b3130\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
