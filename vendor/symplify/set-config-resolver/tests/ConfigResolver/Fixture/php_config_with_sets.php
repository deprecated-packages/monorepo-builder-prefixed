<?php

declare (strict_types=1);
namespace _PhpScoperdd9048e10aae;

use _PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['some_php_set']);
};
