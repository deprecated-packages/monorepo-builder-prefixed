<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScopere9939b84e968\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopere9939b84e968\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScopere9939b84e968\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopere9939b84e968\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
