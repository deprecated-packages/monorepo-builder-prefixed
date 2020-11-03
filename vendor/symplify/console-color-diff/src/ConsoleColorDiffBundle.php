<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperee8f03533f8b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperee8f03533f8b\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperee8f03533f8b\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperee8f03533f8b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
