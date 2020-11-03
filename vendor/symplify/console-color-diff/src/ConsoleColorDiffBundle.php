<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperba481e4bff85\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperba481e4bff85\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
