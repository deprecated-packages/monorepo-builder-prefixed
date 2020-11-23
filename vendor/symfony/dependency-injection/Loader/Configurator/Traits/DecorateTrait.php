<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc9dc9dec1b4a\Symfony\Component\DependencyInjection\Loader\Configurator\Traits;

use _PhpScoperc9dc9dec1b4a\Symfony\Component\DependencyInjection\ContainerInterface;
use _PhpScoperc9dc9dec1b4a\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
trait DecorateTrait
{
    /**
     * Sets the service that this service is decorating.
     *
     * @param string|null $id              The decorated service id, use null to remove decoration
     * @param string|null $renamedId       The new decorated service id
     * @param int         $priority        The priority of decoration
     * @param int         $invalidBehavior The behavior to adopt when decorated is invalid
     *
     * @return $this
     *
     * @throws InvalidArgumentException in case the decorated service id and the new decorated service id are equals
     */
    public final function decorate(?string $id, string $renamedId = null, int $priority = 0, int $invalidBehavior = \_PhpScoperc9dc9dec1b4a\Symfony\Component\DependencyInjection\ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE) : self
    {
        $this->definition->setDecoratedService($id, $renamedId, $priority, $invalidBehavior);
        return $this;
    }
}
