<?php

declare (strict_types=1);
namespace _PhpScoperd3e9cfbe9d90;

use _PhpScoperd3e9cfbe9d90\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperd3e9cfbe9d90\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('key', 'value');
};
