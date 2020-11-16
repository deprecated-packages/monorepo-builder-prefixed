<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperd9ee792cdaf4\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperd9ee792cdaf4\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperd9ee792cdaf4\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperd9ee792cdaf4\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
