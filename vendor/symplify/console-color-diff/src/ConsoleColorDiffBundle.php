<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScopereb9e28d9f307\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopereb9e28d9f307\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScopereb9e28d9f307\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopereb9e28d9f307\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
