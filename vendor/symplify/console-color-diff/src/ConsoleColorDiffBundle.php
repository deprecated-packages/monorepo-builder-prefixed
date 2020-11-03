<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperdfdcb3d4cca0\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperdfdcb3d4cca0\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperdfdcb3d4cca0\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperdfdcb3d4cca0\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
