<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoper3e1a86bff77f\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper3e1a86bff77f\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoper3e1a86bff77f\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper3e1a86bff77f\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
