<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator;

use _PhpScoper55b61aca61e8\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper55b61aca61e8\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension;
final class ComposerJsonManipulatorBundle extends \_PhpScoper55b61aca61e8\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper55b61aca61e8\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension();
    }
}
