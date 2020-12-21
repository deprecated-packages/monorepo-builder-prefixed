<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\Bundle;

use _PhpScoper9aa6186049d8\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper9aa6186049d8\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoper9aa6186049d8\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper9aa6186049d8\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
