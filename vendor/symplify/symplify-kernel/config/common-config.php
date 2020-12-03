<?php

declare (strict_types=1);
namespace _PhpScoper3a64dbb4e14f;

use _PhpScoper3a64dbb4e14f\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper3a64dbb4e14f\Symfony\Component\DependencyInjection\ContainerInterface;
use _PhpScoper3a64dbb4e14f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\ComposerJsonManipulator\ComposerJsonFactory;
use Symplify\ComposerJsonManipulator\FileSystem\JsonFileManager;
use Symplify\ComposerJsonManipulator\Json\JsonCleaner;
use Symplify\ComposerJsonManipulator\Json\JsonInliner;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use Symplify\SmartFileSystem\FileSystemFilter;
use Symplify\SmartFileSystem\FileSystemGuard;
use Symplify\SmartFileSystem\Finder\FinderSanitizer;
use Symplify\SmartFileSystem\Finder\SmartFinder;
use Symplify\SmartFileSystem\SmartFileSystem;
use Symplify\SymplifyKernel\Console\ConsoleApplicationFactory;
use function _PhpScoper3a64dbb4e14f\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper3a64dbb4e14f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    // symfony style
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoper3a64dbb4e14f\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoper3a64dbb4e14f\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    // filesystem
    $services->set(\Symplify\SmartFileSystem\Finder\FinderSanitizer::class);
    $services->set(\Symplify\SmartFileSystem\SmartFileSystem::class);
    $services->set(\Symplify\SmartFileSystem\Finder\SmartFinder::class);
    $services->set(\Symplify\SmartFileSystem\FileSystemGuard::class);
    $services->set(\Symplify\SmartFileSystem\FileSystemFilter::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class)->args([\_PhpScoper3a64dbb4e14f\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoper3a64dbb4e14f\Symfony\Component\DependencyInjection\ContainerInterface::class)]);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
    $services->set(\Symplify\SymplifyKernel\Console\ConsoleApplicationFactory::class);
    // composer json factory
    $services->set(\Symplify\ComposerJsonManipulator\ComposerJsonFactory::class);
    $services->set(\Symplify\ComposerJsonManipulator\FileSystem\JsonFileManager::class);
    $services->set(\Symplify\ComposerJsonManipulator\Json\JsonCleaner::class);
    $services->set(\Symplify\ComposerJsonManipulator\Json\JsonInliner::class);
};
