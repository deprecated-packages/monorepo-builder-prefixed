<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperbe77f3b0e77d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperbe77f3b0e77d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
