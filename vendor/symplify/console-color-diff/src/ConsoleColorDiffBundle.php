<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperc4f6ca029880\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperc4f6ca029880\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperc4f6ca029880\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperc4f6ca029880\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
