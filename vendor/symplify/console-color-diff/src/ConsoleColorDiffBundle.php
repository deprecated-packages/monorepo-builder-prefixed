<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperabb8c88e9df1\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperabb8c88e9df1\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperabb8c88e9df1\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperabb8c88e9df1\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
