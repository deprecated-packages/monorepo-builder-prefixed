<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb1086ecf2bcb\Symfony\Component\DependencyInjection\Loader\Configurator\Traits;

use _PhpScoperb1086ecf2bcb\Symfony\Component\DependencyInjection\ChildDefinition;
use _PhpScoperb1086ecf2bcb\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
trait AutoconfigureTrait
{
    /**
     * Sets whether or not instanceof conditionals should be prepended with a global set.
     *
     * @return $this
     *
     * @throws InvalidArgumentException when a parent is already set
     */
    public final function autoconfigure(bool $autoconfigured = \true) : self
    {
        if ($autoconfigured && $this->definition instanceof \_PhpScoperb1086ecf2bcb\Symfony\Component\DependencyInjection\ChildDefinition) {
            throw new \_PhpScoperb1086ecf2bcb\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('The service "%s" cannot have a "parent" and also have "autoconfigure". Try disabling autoconfiguration for the service.', $this->id));
        }
        $this->definition->setAutoconfigured($autoconfigured);
        return $this;
    }
}
