<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Contract\HttpKernel;

use _PhpScoper1832ada183f6\Symfony\Component\HttpKernel\KernelInterface;
interface ExtraConfigAwareKernelInterface extends \_PhpScoper1832ada183f6\Symfony\Component\HttpKernel\KernelInterface
{
    /**
     * @param string[] $configs
     */
    public function setConfigs(array $configs) : void;
}
