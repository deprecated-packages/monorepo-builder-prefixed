<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScopere846b54512fc\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopere846b54512fc\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScopere846b54512fc\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopere846b54512fc\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
