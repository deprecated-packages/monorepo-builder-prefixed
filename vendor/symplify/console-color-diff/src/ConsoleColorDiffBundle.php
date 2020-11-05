<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperc0b8351d879b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperc0b8351d879b\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperc0b8351d879b\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperc0b8351d879b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
