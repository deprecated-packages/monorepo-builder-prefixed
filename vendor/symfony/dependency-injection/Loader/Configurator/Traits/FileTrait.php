<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperedfa898a454f\Symfony\Component\DependencyInjection\Loader\Configurator\Traits;

trait FileTrait
{
    /**
     * Sets a file to require before creating the service.
     *
     * @return $this
     */
    public final function file(string $file) : self
    {
        $this->definition->setFile($file);
        return $this;
    }
}
