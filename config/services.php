<?php

declare (strict_types=1);
namespace _PhpScoperf78d2b40800e;

use _PhpScoperf78d2b40800e\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperf78d2b40800e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperf78d2b40800e\Symfony\Component\EventDispatcher\EventDispatcher;
use _PhpScoperf78d2b40800e\Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
use Symplify\PackageBuilder\Reflection\PrivatesCaller;
use Symplify\PackageBuilder\Yaml\ParametersMerger;
use Symplify\SmartFileSystem\FileSystemGuard;
use Symplify\SmartFileSystem\Finder\FinderSanitizer;
use Symplify\SmartFileSystem\SmartFileSystem;
use function _PhpScoperf78d2b40800e\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperf78d2b40800e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MonorepoBuilder\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/Exception', __DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/ValueObject']);
    $services->set(\_PhpScoperf78d2b40800e\Symfony\Component\EventDispatcher\EventDispatcher::class);
    $services->alias(\_PhpScoperf78d2b40800e\Symfony\Component\EventDispatcher\EventDispatcherInterface::class, \_PhpScoperf78d2b40800e\Symfony\Component\EventDispatcher\EventDispatcher::class);
    $services->set(\Symplify\SmartFileSystem\SmartFileSystem::class);
    $services->set(\Symplify\SmartFileSystem\FileSystemGuard::class);
    $services->set(\Symplify\SmartFileSystem\Finder\FinderSanitizer::class);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesCaller::class);
    $services->set(\Symplify\PackageBuilder\Yaml\ParametersMerger::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
    $services->set(\_PhpScoperf78d2b40800e\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperf78d2b40800e\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
