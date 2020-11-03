<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScopera763b4be90d0\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopera763b4be90d0\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScopera763b4be90d0\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopera763b4be90d0\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
