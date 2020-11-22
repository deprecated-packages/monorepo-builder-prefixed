<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperc41e8050ff3f\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperc41e8050ff3f\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperc41e8050ff3f\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperc41e8050ff3f\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
