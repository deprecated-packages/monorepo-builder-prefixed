<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator;

use _PhpScopercdfd316eda69\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopercdfd316eda69\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension;
final class ComposerJsonManipulatorBundle extends \_PhpScopercdfd316eda69\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopercdfd316eda69\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension();
    }
}
