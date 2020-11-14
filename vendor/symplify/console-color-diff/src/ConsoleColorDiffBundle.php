<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperae7532b8c744\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperae7532b8c744\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperae7532b8c744\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperae7532b8c744\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
