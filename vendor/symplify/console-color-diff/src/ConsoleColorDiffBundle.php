<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperf701e46e48a5\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperf701e46e48a5\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperf701e46e48a5\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperf701e46e48a5\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
