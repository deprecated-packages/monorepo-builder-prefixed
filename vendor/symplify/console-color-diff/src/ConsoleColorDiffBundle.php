<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoper472361b15529\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper472361b15529\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoper472361b15529\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper472361b15529\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}