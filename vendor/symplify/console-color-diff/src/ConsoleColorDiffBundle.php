<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperdbf49b510e11\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperdbf49b510e11\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperdbf49b510e11\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperdbf49b510e11\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
