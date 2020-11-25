<?php

declare (strict_types=1);
namespace _PhpScopereaa2cae8e093;

use _PhpScopereaa2cae8e093\Symfony\Component\DependencyInjection\ContainerInterface;
use _PhpScopereaa2cae8e093\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\ComposerJsonManipulator\ValueObject\Option;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
use Symplify\PackageBuilder\Reflection\PrivatesCaller;
use Symplify\SmartFileSystem\SmartFileSystem;
use function _PhpScopereaa2cae8e093\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopereaa2cae8e093\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\ComposerJsonManipulator\ValueObject\Option::INLINE_SECTIONS, ['keywords']);
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ComposerJsonManipulator\\', __DIR__ . '/../src');
    $services->set(\Symplify\SmartFileSystem\SmartFileSystem::class);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesCaller::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class)->args([\_PhpScopereaa2cae8e093\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScopereaa2cae8e093\Symfony\Component\DependencyInjection\ContainerInterface::class)]);
};
