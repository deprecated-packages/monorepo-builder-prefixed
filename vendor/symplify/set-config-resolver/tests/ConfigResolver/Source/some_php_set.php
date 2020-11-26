<?php

declare (strict_types=1);
namespace _PhpScoper97d4f3c5628a;

use _PhpScoper97d4f3c5628a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper97d4f3c5628a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
