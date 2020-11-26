<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\Bundle;

use _PhpScoper485f3a9238ad\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper485f3a9238ad\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper485f3a9238ad\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
use Symplify\SymplifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass;
use Symplify\SymplifyKernel\DependencyInjection\Extension\SymplifyKernelExtension;
final class SymplifyKernelBundle extends \_PhpScoper485f3a9238ad\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoper485f3a9238ad\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\SymplifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass());
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoper485f3a9238ad\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\SymplifyKernel\DependencyInjection\Extension\SymplifyKernelExtension();
    }
}
