<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperc4633daa1458\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperc4633daa1458\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperc4633daa1458\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperc4633daa1458\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
