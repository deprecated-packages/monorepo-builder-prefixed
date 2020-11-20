<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperabca9a64438b\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperabca9a64438b\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperabca9a64438b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
