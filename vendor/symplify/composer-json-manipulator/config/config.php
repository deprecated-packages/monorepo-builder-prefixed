<?php

declare (strict_types=1);
namespace _PhpScoperba481e4bff85;

use _PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\ContainerInterface;
use _PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\ComposerJsonManipulator\ValueObject\Option;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
use Symplify\PackageBuilder\Reflection\PrivatesCaller;
use Symplify\SmartFileSystem\SmartFileSystem;
use function _PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\ComposerJsonManipulator\ValueObject\Option::INLINE_SECTIONS, ['keywords']);
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ComposerJsonManipulator\\', __DIR__ . '/../src');
    $services->set(\Symplify\SmartFileSystem\SmartFileSystem::class);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesCaller::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class)->args([\_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\ContainerInterface::class)]);
};
