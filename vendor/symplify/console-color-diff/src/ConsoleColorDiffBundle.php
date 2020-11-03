<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoper43a95e2f69bc\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper43a95e2f69bc\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoper43a95e2f69bc\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper43a95e2f69bc\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
