<?php

declare (strict_types=1);
namespace Symplify\AutowireArrayParameter\Tests\HttpKernel;

use _PhpScopera2ff5fd2b59c\Symfony\Component\Config\Loader\LoaderInterface;
use _PhpScopera2ff5fd2b59c\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera2ff5fd2b59c\Symfony\Component\HttpKernel\Bundle\BundleInterface;
use _PhpScopera2ff5fd2b59c\Symfony\Component\HttpKernel\Kernel;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class AutowireArrayParameterHttpKernel extends \_PhpScopera2ff5fd2b59c\Symfony\Component\HttpKernel\Kernel
{
    public function registerContainerConfiguration(\_PhpScopera2ff5fd2b59c\Symfony\Component\Config\Loader\LoaderInterface $loader) : void
    {
        $loader->load(__DIR__ . '/../config/autowire_array_parameter.php');
    }
    public function getCacheDir() : string
    {
        return \sys_get_temp_dir() . '/autowire_array_parameter_test';
    }
    public function getLogDir() : string
    {
        return \sys_get_temp_dir() . '/autowire_array_parameter_test_log';
    }
    /**
     * @return BundleInterface[]
     */
    public function registerBundles() : iterable
    {
        return [];
    }
    protected function build(\_PhpScopera2ff5fd2b59c\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
    }
}
