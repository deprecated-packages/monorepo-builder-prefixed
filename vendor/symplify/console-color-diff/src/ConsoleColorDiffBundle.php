<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperda849baa4a45\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperda849baa4a45\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperda849baa4a45\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperda849baa4a45\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
