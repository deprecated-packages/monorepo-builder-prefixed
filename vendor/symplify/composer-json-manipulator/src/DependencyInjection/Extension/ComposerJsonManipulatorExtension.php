<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperba481e4bff85\Symfony\Component\Config\FileLocator;
use _PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperba481e4bff85\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
