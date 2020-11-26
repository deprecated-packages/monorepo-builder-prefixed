<?php

declare (strict_types=1);
namespace _PhpScoper8a1d608a1a7e;

use _PhpScoper8a1d608a1a7e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper8a1d608a1a7e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
