<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperab3ccffcffcd\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperab3ccffcffcd\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperab3ccffcffcd\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperab3ccffcffcd\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
