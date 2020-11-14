<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoper120e1a259c7c\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper120e1a259c7c\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoper120e1a259c7c\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper120e1a259c7c\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
