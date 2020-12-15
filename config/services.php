<?php

declare (strict_types=1);
namespace _PhpScoperd79f30a2f8be;

use _PhpScoperd79f30a2f8be\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperd79f30a2f8be\Symfony\Component\EventDispatcher\EventDispatcher;
use _PhpScoperd79f30a2f8be\Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symplify\PackageBuilder\Reflection\PrivatesCaller;
use Symplify\PackageBuilder\Yaml\ParametersMerger;
return static function (\_PhpScoperd79f30a2f8be\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MonorepoBuilder\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/Exception', __DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/ValueObject']);
    $services->set(\_PhpScoperd79f30a2f8be\Symfony\Component\EventDispatcher\EventDispatcher::class);
    $services->alias(\_PhpScoperd79f30a2f8be\Symfony\Component\EventDispatcher\EventDispatcherInterface::class, \_PhpScoperd79f30a2f8be\Symfony\Component\EventDispatcher\EventDispatcher::class);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesCaller::class);
    $services->set(\Symplify\PackageBuilder\Yaml\ParametersMerger::class);
};
