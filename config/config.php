<?php

declare (strict_types=1);
namespace _PhpScoper47e141fb470a;

use _PhpScoper47e141fb470a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper47e141fb470a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/services.php');
    $containerConfigurator->import(__DIR__ . '/../packages/**/config/config.php');
    $containerConfigurator->import(__DIR__ . '/parameters.php');
};
