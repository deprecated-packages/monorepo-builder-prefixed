<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper37010f304ea9\Symfony\Component\HttpFoundation\Session\Attribute;

use _PhpScoper37010f304ea9\Symfony\Component\HttpFoundation\Session\SessionBagInterface;
/**
 * Attributes store.
 *
 * @author Drak <drak@zikula.org>
 */
interface AttributeBagInterface extends \_PhpScoper37010f304ea9\Symfony\Component\HttpFoundation\Session\SessionBagInterface
{
    /**
     * Checks if an attribute is defined.
     *
     * @param string $name The attribute name
     *
     * @return bool true if the attribute is defined, false otherwise
     */
    public function has($name);
    /**
     * Returns an attribute.
     *
     * @param string $name    The attribute name
     * @param mixed  $default The default value if not found
     *
     * @return mixed
     */
    public function get($name, $default = null);
    /**
     * Sets an attribute.
     *
     * @param string $name
     * @param mixed  $value
     */
    public function set($name, $value);
    /**
     * Returns attributes.
     *
     * @return array
     */
    public function all();
    public function replace(array $attributes);
    /**
     * Removes an attribute.
     *
     * @param string $name
     *
     * @return mixed The removed value or null when it does not exist
     */
    public function remove($name);
}
