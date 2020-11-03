<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\HttpKernel;

use _PhpScoper621122bdc380\Symfony\Component\Config\Loader\LoaderInterface;
use _PhpScoper621122bdc380\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper621122bdc380\Symfony\Component\HttpKernel\Bundle\BundleInterface;
use Symplify\ComposerJsonManipulator\ComposerJsonManipulatorBundle;
use Symplify\ConsoleColorDiff\ConsoleColorDiffBundle;
use Symplify\MonorepoBuilder\Release\Contract\ReleaseWorker\ReleaseWorkerInterface;
use Symplify\PackageBuilder\DependencyInjection\CompilerPass\AutowireInterfacesCompilerPass;
use Symplify\SymplifyKernel\Bundle\SymplifyKernelBundle;
use Symplify\SymplifyKernel\HttpKernel\AbstractSymplifyKernel;
final class MonorepoBuilderKernel extends \Symplify\SymplifyKernel\HttpKernel\AbstractSymplifyKernel
{
    public function registerContainerConfiguration(\_PhpScoper621122bdc380\Symfony\Component\Config\Loader\LoaderInterface $loader) : void
    {
        $loader->load(__DIR__ . '/../../config/config.php');
        parent::registerContainerConfiguration($loader);
    }
    /**
     * @return BundleInterface[]
     */
    public function registerBundles() : iterable
    {
        return [new \Symplify\ComposerJsonManipulator\ComposerJsonManipulatorBundle(), new \Symplify\SymplifyKernel\Bundle\SymplifyKernelBundle(), new \Symplify\ConsoleColorDiff\ConsoleColorDiffBundle()];
    }
    protected function build(\_PhpScoper621122bdc380\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\PackageBuilder\DependencyInjection\CompilerPass\AutowireInterfacesCompilerPass([\Symplify\MonorepoBuilder\Release\Contract\ReleaseWorker\ReleaseWorkerInterface::class]));
    }
}
