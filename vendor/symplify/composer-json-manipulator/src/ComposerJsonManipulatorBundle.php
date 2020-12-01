<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator;

use _PhpScoperd8a347ec1761\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperd8a347ec1761\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension;
final class ComposerJsonManipulatorBundle extends \_PhpScoperd8a347ec1761\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperd8a347ec1761\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension();
    }
}
