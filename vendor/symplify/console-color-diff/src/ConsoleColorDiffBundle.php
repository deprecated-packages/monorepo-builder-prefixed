<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoper0f23ef1f1d10\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper0f23ef1f1d10\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoper0f23ef1f1d10\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper0f23ef1f1d10\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
