<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScopere6fd569fd43f\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopere6fd569fd43f\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScopere6fd569fd43f\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopere6fd569fd43f\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
