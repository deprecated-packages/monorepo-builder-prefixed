<?php

declare (strict_types=1);
namespace Symplify\ComposerJsonManipulator\Bundle;

use _PhpScoper96a284484937\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper96a284484937\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension;
final class ComposerJsonManipulatorBundle extends \_PhpScoper96a284484937\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper96a284484937\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ComposerJsonManipulator\DependencyInjection\Extension\ComposerJsonManipulatorExtension();
    }
}
