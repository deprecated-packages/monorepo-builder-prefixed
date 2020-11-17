<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperfdd2db5e123d\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperfdd2db5e123d\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperfdd2db5e123d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
