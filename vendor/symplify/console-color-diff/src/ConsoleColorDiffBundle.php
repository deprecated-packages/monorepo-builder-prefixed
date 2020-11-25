<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperfa8ac9431c57\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperfa8ac9431c57\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
