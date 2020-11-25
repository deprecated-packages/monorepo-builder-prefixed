<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator;

use _PhpScopere97aad8070b4\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopere97aad8070b4\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension;
final class ComposerJsonManipulatorBundle extends \_PhpScopere97aad8070b4\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopere97aad8070b4\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension();
    }
}
