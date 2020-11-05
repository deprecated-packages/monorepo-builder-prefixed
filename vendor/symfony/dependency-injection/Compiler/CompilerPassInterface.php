<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\Compiler;

use _PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\ContainerBuilder;
/**
 * Interface that must be implemented by compilation passes.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface CompilerPassInterface
{
    /**
     * You can modify the container here before it is dumped to PHP code.
     */
    public function process(\_PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\ContainerBuilder $container);
}
