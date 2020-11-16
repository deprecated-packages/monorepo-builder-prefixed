<?php

declare (strict_types=1);
namespace _PhpScoper716f383f1097;

use _PhpScoper716f383f1097\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper716f383f1097\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/services.php');
    $containerConfigurator->import(__DIR__ . '/../packages/**/config/config.php');
    $containerConfigurator->import(__DIR__ . '/parameters.php');
};
