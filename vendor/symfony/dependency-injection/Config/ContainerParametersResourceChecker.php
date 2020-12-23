<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere0f28e6b9bde\Symfony\Component\DependencyInjection\Config;

use _PhpScopere0f28e6b9bde\Symfony\Component\Config\Resource\ResourceInterface;
use _PhpScopere0f28e6b9bde\Symfony\Component\Config\ResourceCheckerInterface;
use _PhpScopere0f28e6b9bde\Symfony\Component\DependencyInjection\ContainerInterface;
/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class ContainerParametersResourceChecker implements \_PhpScopere0f28e6b9bde\Symfony\Component\Config\ResourceCheckerInterface
{
    /** @var ContainerInterface */
    private $container;
    public function __construct(\_PhpScopere0f28e6b9bde\Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
        $this->container = $container;
    }
    /**
     * {@inheritdoc}
     */
    public function supports(\_PhpScopere0f28e6b9bde\Symfony\Component\Config\Resource\ResourceInterface $metadata)
    {
        return $metadata instanceof \_PhpScopere0f28e6b9bde\Symfony\Component\DependencyInjection\Config\ContainerParametersResource;
    }
    /**
     * {@inheritdoc}
     */
    public function isFresh(\_PhpScopere0f28e6b9bde\Symfony\Component\Config\Resource\ResourceInterface $resource, int $timestamp)
    {
        foreach ($resource->getParameters() as $key => $value) {
            if (!$this->container->hasParameter($key) || $this->container->getParameter($key) !== $value) {
                return \false;
            }
        }
        return \true;
    }
}
