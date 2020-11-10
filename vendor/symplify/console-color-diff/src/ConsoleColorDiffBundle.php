<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScopera31d0d6ff47a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopera31d0d6ff47a\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScopera31d0d6ff47a\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopera31d0d6ff47a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
