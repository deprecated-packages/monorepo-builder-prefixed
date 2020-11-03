<?php

declare (strict_types=1);
namespace _PhpScoperba481e4bff85;

use _PhpScoperba481e4bff85\SebastianBergmann\Diff\Differ;
use _PhpScoperba481e4bff85\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperba481e4bff85\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperba481e4bff85\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
