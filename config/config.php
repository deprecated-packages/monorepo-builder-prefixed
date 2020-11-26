<?php

declare (strict_types=1);
namespace _PhpScoper905a278e297d;

use _PhpScoper905a278e297d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper905a278e297d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/services.php');
    $containerConfigurator->import(__DIR__ . '/../packages/**/config/config.php');
    $containerConfigurator->import(__DIR__ . '/parameters.php');
};
