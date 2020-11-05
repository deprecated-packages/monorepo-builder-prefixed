<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Contract\HttpKernel;

use _PhpScoper47e141fb470a\Symfony\Component\HttpKernel\KernelInterface;
interface ExtraConfigAwareKernelInterface extends \_PhpScoper47e141fb470a\Symfony\Component\HttpKernel\KernelInterface
{
    /**
     * @param string[] $configs
     */
    public function setConfigs(array $configs) : void;
}
