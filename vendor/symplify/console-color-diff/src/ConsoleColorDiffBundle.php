<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoper3c46f40844ed\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper3c46f40844ed\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoper3c46f40844ed\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper3c46f40844ed\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
