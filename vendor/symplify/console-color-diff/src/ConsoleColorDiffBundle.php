<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoper97d4f3c5628a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper97d4f3c5628a\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoper97d4f3c5628a\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper97d4f3c5628a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
