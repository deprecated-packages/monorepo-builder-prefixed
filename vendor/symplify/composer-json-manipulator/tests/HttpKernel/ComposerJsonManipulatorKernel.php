<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\Tests\HttpKernel;

use _PhpScopera00544d51e07\Symfony\Component\HttpKernel\Bundle\BundleInterface;
use Symplify\ComposerJsonManipulator\ComposerJsonManipulatorBundle;
use Symplify\SymplifyKernel\Bundle\SymplifyKernelBundle;
use Symplify\SymplifyKernel\HttpKernel\AbstractSymplifyKernel;
final class ComposerJsonManipulatorKernel extends \Symplify\SymplifyKernel\HttpKernel\AbstractSymplifyKernel
{
    /**
     * @return BundleInterface[]
     */
    public function registerBundles() : array
    {
        return [new \Symplify\ComposerJsonManipulator\ComposerJsonManipulatorBundle(), new \Symplify\SymplifyKernel\Bundle\SymplifyKernelBundle()];
    }
}
