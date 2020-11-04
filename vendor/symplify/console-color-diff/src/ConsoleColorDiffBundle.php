<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperce084f4275dd\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperce084f4275dd\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperce084f4275dd\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperce084f4275dd\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
