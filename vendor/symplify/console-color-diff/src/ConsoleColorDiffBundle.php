<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoper0d4928f7af97\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper0d4928f7af97\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoper0d4928f7af97\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper0d4928f7af97\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
