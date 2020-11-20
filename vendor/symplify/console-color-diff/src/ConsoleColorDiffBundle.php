<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScopercdc90a6628b6\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopercdc90a6628b6\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScopercdc90a6628b6\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopercdc90a6628b6\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
