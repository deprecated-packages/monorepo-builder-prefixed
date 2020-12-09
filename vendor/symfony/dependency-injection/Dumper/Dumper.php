<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc86a79e2d6b2\Symfony\Component\DependencyInjection\Dumper;

use _PhpScoperc86a79e2d6b2\Symfony\Component\DependencyInjection\ContainerBuilder;
/**
 * Dumper is the abstract class for all built-in dumpers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Dumper implements \_PhpScoperc86a79e2d6b2\Symfony\Component\DependencyInjection\Dumper\DumperInterface
{
    protected $container;
    public function __construct(\_PhpScoperc86a79e2d6b2\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $this->container = $container;
    }
}
