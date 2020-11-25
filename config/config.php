<?php

declare (strict_types=1);
namespace _PhpScoperfa8ac9431c57;

use _PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/services.php');
    $containerConfigurator->import(__DIR__ . '/../packages/**/config/config.php');
    $containerConfigurator->import(__DIR__ . '/parameters.php');
};
