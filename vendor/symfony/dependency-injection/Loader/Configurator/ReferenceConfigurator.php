<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbe77f3b0e77d\Symfony\Component\DependencyInjection\Loader\Configurator;

use _PhpScoperbe77f3b0e77d\Symfony\Component\DependencyInjection\ContainerInterface;
/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ReferenceConfigurator extends \_PhpScoperbe77f3b0e77d\Symfony\Component\DependencyInjection\Loader\Configurator\AbstractConfigurator
{
    /** @internal */
    protected $id;
    /** @internal */
    protected $invalidBehavior = \_PhpScoperbe77f3b0e77d\Symfony\Component\DependencyInjection\ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE;
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return $this
     */
    public final function ignoreOnInvalid() : self
    {
        $this->invalidBehavior = \_PhpScoperbe77f3b0e77d\Symfony\Component\DependencyInjection\ContainerInterface::IGNORE_ON_INVALID_REFERENCE;
        return $this;
    }
    /**
     * @return $this
     */
    public final function nullOnInvalid() : self
    {
        $this->invalidBehavior = \_PhpScoperbe77f3b0e77d\Symfony\Component\DependencyInjection\ContainerInterface::NULL_ON_INVALID_REFERENCE;
        return $this;
    }
    /**
     * @return $this
     */
    public final function ignoreOnUninitialized() : self
    {
        $this->invalidBehavior = \_PhpScoperbe77f3b0e77d\Symfony\Component\DependencyInjection\ContainerInterface::IGNORE_ON_UNINITIALIZED_REFERENCE;
        return $this;
    }
    /**
     * @return string
     */
    public function __toString()
    {
        return $this->id;
    }
}
