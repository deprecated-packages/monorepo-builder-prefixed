<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator;

use _PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperfa8ac9431c57\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension;
final class ComposerJsonManipulatorBundle extends \_PhpScoperfa8ac9431c57\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension();
    }
}
