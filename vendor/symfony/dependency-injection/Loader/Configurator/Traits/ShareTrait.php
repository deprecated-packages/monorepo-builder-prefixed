<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper53a6895b9c5b\Symfony\Component\DependencyInjection\Loader\Configurator\Traits;

trait ShareTrait
{
    /**
     * Sets if the service must be shared or not.
     *
     * @return $this
     */
    public final function share(bool $shared = \true) : self
    {
        $this->definition->setShared($shared);
        return $this;
    }
}
