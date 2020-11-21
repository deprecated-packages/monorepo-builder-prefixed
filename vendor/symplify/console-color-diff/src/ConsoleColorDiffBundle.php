<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperbc89827b806f\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperbc89827b806f\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperbc89827b806f\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperbc89827b806f\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
