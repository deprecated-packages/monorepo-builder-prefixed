<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperfd1a6a0ee9af\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperfd1a6a0ee9af\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
