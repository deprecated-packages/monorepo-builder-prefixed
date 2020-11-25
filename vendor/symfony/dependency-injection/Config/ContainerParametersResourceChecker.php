<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Config;

use _PhpScoperfa8ac9431c57\Symfony\Component\Config\Resource\ResourceInterface;
use _PhpScoperfa8ac9431c57\Symfony\Component\Config\ResourceCheckerInterface;
use _PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\ContainerInterface;
/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class ContainerParametersResourceChecker implements \_PhpScoperfa8ac9431c57\Symfony\Component\Config\ResourceCheckerInterface
{
    /** @var ContainerInterface */
    private $container;
    public function __construct(\_PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
        $this->container = $container;
    }
    /**
     * {@inheritdoc}
     */
    public function supports(\_PhpScoperfa8ac9431c57\Symfony\Component\Config\Resource\ResourceInterface $metadata)
    {
        return $metadata instanceof \_PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Config\ContainerParametersResource;
    }
    /**
     * {@inheritdoc}
     */
    public function isFresh(\_PhpScoperfa8ac9431c57\Symfony\Component\Config\Resource\ResourceInterface $resource, int $timestamp)
    {
        foreach ($resource->getParameters() as $key => $value) {
            if (!$this->container->hasParameter($key) || $this->container->getParameter($key) !== $value) {
                return \false;
            }
        }
        return \true;
    }
}
