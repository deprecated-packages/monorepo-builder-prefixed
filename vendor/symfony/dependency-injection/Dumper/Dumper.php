<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere6fd569fd43f\Symfony\Component\DependencyInjection\Dumper;

use _PhpScopere6fd569fd43f\Symfony\Component\DependencyInjection\ContainerBuilder;
/**
 * Dumper is the abstract class for all built-in dumpers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Dumper implements \_PhpScopere6fd569fd43f\Symfony\Component\DependencyInjection\Dumper\DumperInterface
{
    protected $container;
    public function __construct(\_PhpScopere6fd569fd43f\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $this->container = $container;
    }
}
