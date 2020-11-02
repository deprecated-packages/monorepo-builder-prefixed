<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScopercdfd316eda69\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopercdfd316eda69\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScopercdfd316eda69\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopercdfd316eda69\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
