<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperafeb7177e88e\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperafeb7177e88e\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperafeb7177e88e\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperafeb7177e88e\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
