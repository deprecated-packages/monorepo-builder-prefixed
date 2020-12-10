<?php

declare (strict_types=1);
namespace _PhpScoper4c229f9734b6;

use _PhpScoper4c229f9734b6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper4c229f9734b6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/services.php');
    $containerConfigurator->import(__DIR__ . '/../packages/**/config/config.php');
    $containerConfigurator->import(__DIR__ . '/parameters.php');
};
