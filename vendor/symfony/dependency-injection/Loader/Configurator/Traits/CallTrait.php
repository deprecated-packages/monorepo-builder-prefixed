<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper9175a5176ce9\Symfony\Component\DependencyInjection\Loader\Configurator\Traits;

use _PhpScoper9175a5176ce9\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
trait CallTrait
{
    /**
     * Adds a method to call after service initialization.
     *
     * @param string $method    The method name to call
     * @param array  $arguments An array of arguments to pass to the method call
     *
     * @return $this
     *
     * @throws InvalidArgumentException on empty $method param
     */
    public final function call(string $method, array $arguments = []) : self
    {
        $this->definition->addMethodCall($method, static::processValue($arguments, \true));
        return $this;
    }
}
