<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoper600b802aef08\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper600b802aef08\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoper600b802aef08\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper600b802aef08\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
