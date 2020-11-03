<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperddf2171d3d2c\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperddf2171d3d2c\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperddf2171d3d2c\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperddf2171d3d2c\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
