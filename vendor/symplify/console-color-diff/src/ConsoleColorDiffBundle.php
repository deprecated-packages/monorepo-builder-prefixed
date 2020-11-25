<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScopera5e5d165d78c\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopera5e5d165d78c\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScopera5e5d165d78c\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopera5e5d165d78c\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
