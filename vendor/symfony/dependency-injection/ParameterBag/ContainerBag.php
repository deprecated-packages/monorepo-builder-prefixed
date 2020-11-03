<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperddf2171d3d2c\Symfony\Component\DependencyInjection\ParameterBag;

use _PhpScoperddf2171d3d2c\Symfony\Component\DependencyInjection\Container;
/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ContainerBag extends \_PhpScoperddf2171d3d2c\Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag implements \_PhpScoperddf2171d3d2c\Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface
{
    private $container;
    public function __construct(\_PhpScoperddf2171d3d2c\Symfony\Component\DependencyInjection\Container $container)
    {
        $this->container = $container;
    }
    /**
     * {@inheritdoc}
     */
    public function all()
    {
        return $this->container->getParameterBag()->all();
    }
    /**
     * {@inheritdoc}
     */
    public function get($name)
    {
        return $this->container->getParameter($name);
    }
    /**
     * {@inheritdoc}
     */
    public function has($name)
    {
        return $this->container->hasParameter($name);
    }
}
