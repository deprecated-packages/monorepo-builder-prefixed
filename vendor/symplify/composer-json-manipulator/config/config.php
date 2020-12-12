<?php

declare (strict_types=1);
namespace _PhpScoper6d6fbd28d6a9;

use _PhpScoper6d6fbd28d6a9\Symfony\Component\DependencyInjection\ContainerInterface;
use _PhpScoper6d6fbd28d6a9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\ComposerJsonManipulator\ValueObject\Option;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
use Symplify\PackageBuilder\Reflection\PrivatesCaller;
use Symplify\SmartFileSystem\SmartFileSystem;
use function _PhpScoper6d6fbd28d6a9\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper6d6fbd28d6a9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\ComposerJsonManipulator\ValueObject\Option::INLINE_SECTIONS, ['keywords']);
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ComposerJsonManipulator\\', __DIR__ . '/../src');
    $services->set(\Symplify\SmartFileSystem\SmartFileSystem::class);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesCaller::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class)->args([\_PhpScoper6d6fbd28d6a9\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoper6d6fbd28d6a9\Symfony\Component\DependencyInjection\ContainerInterface::class)]);
};
