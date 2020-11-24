<?php

declare (strict_types=1);
namespace _PhpScoper3ceab9fdc42a;

use _PhpScoper3ceab9fdc42a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper3ceab9fdc42a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
