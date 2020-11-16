<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoper1c1f12bbe5a7\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper1c1f12bbe5a7\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoper1c1f12bbe5a7\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper1c1f12bbe5a7\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
