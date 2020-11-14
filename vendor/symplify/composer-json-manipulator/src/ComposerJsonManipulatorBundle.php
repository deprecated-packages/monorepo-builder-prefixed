<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator;

use _PhpScopera2f1d1d42b88\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopera2f1d1d42b88\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension;
final class ComposerJsonManipulatorBundle extends \_PhpScopera2f1d1d42b88\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopera2f1d1d42b88\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension();
    }
}
