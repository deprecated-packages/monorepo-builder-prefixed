<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperef4638f5d8b1\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperef4638f5d8b1\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperef4638f5d8b1\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperef4638f5d8b1\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
