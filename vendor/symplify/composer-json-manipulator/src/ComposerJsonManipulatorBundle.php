<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator;

use _PhpScoperc41e8050ff3f\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperc41e8050ff3f\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension;
final class ComposerJsonManipulatorBundle extends \_PhpScoperc41e8050ff3f\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperc41e8050ff3f\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension();
    }
}
