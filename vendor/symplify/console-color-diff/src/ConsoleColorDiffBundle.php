<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperf48ea5df9e9b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperf48ea5df9e9b\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperf48ea5df9e9b\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperf48ea5df9e9b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
