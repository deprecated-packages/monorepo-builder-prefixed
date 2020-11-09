<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere9939b84e968\Symfony\Component\DependencyInjection;

/**
 * TaggedContainerInterface is the interface implemented when a container knows how to deals with tags.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface TaggedContainerInterface extends \_PhpScopere9939b84e968\Symfony\Component\DependencyInjection\ContainerInterface
{
    /**
     * Returns service ids for a given tag.
     *
     * @param string $name The tag name
     *
     * @return array An array of tags
     */
    public function findTaggedServiceIds($name);
}
