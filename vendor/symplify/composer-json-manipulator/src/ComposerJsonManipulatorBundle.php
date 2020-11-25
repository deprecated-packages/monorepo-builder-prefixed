<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator;

use _PhpScopera5e5d165d78c\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopera5e5d165d78c\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension;
final class ComposerJsonManipulatorBundle extends \_PhpScopera5e5d165d78c\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopera5e5d165d78c\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension();
    }
}
