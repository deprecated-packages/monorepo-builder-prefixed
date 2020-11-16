<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperb1086ecf2bcb\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperb1086ecf2bcb\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperb1086ecf2bcb\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperb1086ecf2bcb\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
