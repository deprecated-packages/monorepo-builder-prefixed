<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Contract\HttpKernel;

use _PhpScoperd3e9cfbe9d90\Symfony\Component\HttpKernel\KernelInterface;
interface ExtraConfigAwareKernelInterface extends \_PhpScoperd3e9cfbe9d90\Symfony\Component\HttpKernel\KernelInterface
{
    /**
     * @param string[] $configs
     */
    public function setConfigs(array $configs) : void;
}
