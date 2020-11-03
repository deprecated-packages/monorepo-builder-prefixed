<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\DependencyInjection\Extension;

use _PhpScoperd3e9cfbe9d90\Symfony\Component\Config\FileLocator;
use _PhpScoperd3e9cfbe9d90\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd3e9cfbe9d90\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoperd3e9cfbe9d90\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class ComposerJsonManipulatorExtension extends \_PhpScoperd3e9cfbe9d90\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScoperd3e9cfbe9d90\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $phpFileLoader = new \_PhpScoperd3e9cfbe9d90\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScoperd3e9cfbe9d90\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
