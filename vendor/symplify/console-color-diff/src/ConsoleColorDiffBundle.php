<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScopere73d4c0b7ec8\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopere73d4c0b7ec8\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScopere73d4c0b7ec8\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopere73d4c0b7ec8\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
