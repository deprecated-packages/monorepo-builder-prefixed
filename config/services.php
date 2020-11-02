<?php

declare (strict_types=1);
namespace _PhpScoper935bde169806;

use _PhpScoper935bde169806\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper935bde169806\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoper935bde169806\Symfony\Component\EventDispatcher\EventDispatcher;
use _PhpScoper935bde169806\Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
use Symplify\PackageBuilder\Reflection\PrivatesCaller;
use Symplify\PackageBuilder\Yaml\ParametersMerger;
use Symplify\SmartFileSystem\FileSystemGuard;
use Symplify\SmartFileSystem\Finder\FinderSanitizer;
use Symplify\SmartFileSystem\SmartFileSystem;
use function Symplify\PackageBuilder\Functions\service_polyfill;
return static function (\_PhpScoper935bde169806\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MonorepoBuilder\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/Exception', __DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/ValueObject']);
    $services->set(\_PhpScoper935bde169806\Symfony\Component\EventDispatcher\EventDispatcher::class);
    $services->alias(\_PhpScoper935bde169806\Symfony\Component\EventDispatcher\EventDispatcherInterface::class, \_PhpScoper935bde169806\Symfony\Component\EventDispatcher\EventDispatcher::class);
    $services->set(\Symplify\SmartFileSystem\SmartFileSystem::class);
    $services->set(\Symplify\SmartFileSystem\FileSystemGuard::class);
    $services->set(\Symplify\SmartFileSystem\Finder\FinderSanitizer::class);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesCaller::class);
    $services->set(\Symplify\PackageBuilder\Yaml\ParametersMerger::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
    // Symfony 5.1+
    $services->set(\_PhpScoper935bde169806\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\Symplify\PackageBuilder\Functions\service_polyfill(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};