<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoper29aa9f1ba53d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper29aa9f1ba53d\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoper29aa9f1ba53d\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper29aa9f1ba53d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
