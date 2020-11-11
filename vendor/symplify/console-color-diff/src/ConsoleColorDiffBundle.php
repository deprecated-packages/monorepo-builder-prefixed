<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperf0b2c071f15d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperf0b2c071f15d\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperf0b2c071f15d\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperf0b2c071f15d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
