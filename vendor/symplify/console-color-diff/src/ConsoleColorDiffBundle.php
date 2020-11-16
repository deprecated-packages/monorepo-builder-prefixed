<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperdfa889d8967a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperdfa889d8967a\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperdfa889d8967a\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperdfa889d8967a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
