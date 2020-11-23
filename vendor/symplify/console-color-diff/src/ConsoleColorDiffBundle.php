<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScopere3ed9f66440c\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopere3ed9f66440c\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScopere3ed9f66440c\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopere3ed9f66440c\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
