<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc86a79e2d6b2\Symfony\Component\DependencyInjection\Loader\Configurator\Traits;

trait AutowireTrait
{
    /**
     * Enables/disables autowiring.
     *
     * @return $this
     */
    public final function autowire(bool $autowired = \true) : self
    {
        $this->definition->setAutowired($autowired);
        return $this;
    }
}
