<?php

declare (strict_types=1);
namespace _PhpScoperc86a79e2d6b2;

use _PhpScoperc86a79e2d6b2\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperc86a79e2d6b2\Symfony\Component\EventDispatcher\EventDispatcher;
use _PhpScoperc86a79e2d6b2\Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symplify\PackageBuilder\Reflection\PrivatesCaller;
use Symplify\PackageBuilder\Yaml\ParametersMerger;
return static function (\_PhpScoperc86a79e2d6b2\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MonorepoBuilder\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/Exception', __DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/ValueObject']);
    $services->set(\_PhpScoperc86a79e2d6b2\Symfony\Component\EventDispatcher\EventDispatcher::class);
    $services->alias(\_PhpScoperc86a79e2d6b2\Symfony\Component\EventDispatcher\EventDispatcherInterface::class, \_PhpScoperc86a79e2d6b2\Symfony\Component\EventDispatcher\EventDispatcher::class);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesCaller::class);
    $services->set(\Symplify\PackageBuilder\Yaml\ParametersMerger::class);
};
