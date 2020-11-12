<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperad3f32c1b87c\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperad3f32c1b87c\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperad3f32c1b87c\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperad3f32c1b87c\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
