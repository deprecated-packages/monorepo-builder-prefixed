<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper68683f91c63d\Symfony\Component\DependencyInjection\Config;

use _PhpScoper68683f91c63d\Symfony\Component\Config\Resource\ResourceInterface;
use _PhpScoper68683f91c63d\Symfony\Component\Config\ResourceCheckerInterface;
use _PhpScoper68683f91c63d\Symfony\Component\DependencyInjection\ContainerInterface;
/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class ContainerParametersResourceChecker implements \_PhpScoper68683f91c63d\Symfony\Component\Config\ResourceCheckerInterface
{
    /** @var ContainerInterface */
    private $container;
    public function __construct(\_PhpScoper68683f91c63d\Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
        $this->container = $container;
    }
    /**
     * {@inheritdoc}
     */
    public function supports(\_PhpScoper68683f91c63d\Symfony\Component\Config\Resource\ResourceInterface $metadata)
    {
        return $metadata instanceof \_PhpScoper68683f91c63d\Symfony\Component\DependencyInjection\Config\ContainerParametersResource;
    }
    /**
     * {@inheritdoc}
     */
    public function isFresh(\_PhpScoper68683f91c63d\Symfony\Component\Config\Resource\ResourceInterface $resource, $timestamp)
    {
        foreach ($resource->getParameters() as $key => $value) {
            if (!$this->container->hasParameter($key) || $this->container->getParameter($key) !== $value) {
                return \false;
            }
        }
        return \true;
    }
}
