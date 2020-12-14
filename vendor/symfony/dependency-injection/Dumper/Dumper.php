<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdd624bbcb4e5\Symfony\Component\DependencyInjection\Dumper;

use _PhpScoperdd624bbcb4e5\Symfony\Component\DependencyInjection\ContainerBuilder;
/**
 * Dumper is the abstract class for all built-in dumpers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Dumper implements \_PhpScoperdd624bbcb4e5\Symfony\Component\DependencyInjection\Dumper\DumperInterface
{
    protected $container;
    public function __construct(\_PhpScoperdd624bbcb4e5\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $this->container = $container;
    }
}
