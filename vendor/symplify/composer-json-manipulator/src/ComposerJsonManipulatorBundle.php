<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator;

use _PhpScopere3ed9f66440c\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopere3ed9f66440c\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension;
final class ComposerJsonManipulatorBundle extends \_PhpScopere3ed9f66440c\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopere3ed9f66440c\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension();
    }
}
