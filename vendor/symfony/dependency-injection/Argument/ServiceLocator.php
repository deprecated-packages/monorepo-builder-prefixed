<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb2257feafd7d\Symfony\Component\DependencyInjection\Argument;

use _PhpScoperb2257feafd7d\Symfony\Component\DependencyInjection\ServiceLocator as BaseServiceLocator;
/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class ServiceLocator extends \_PhpScoperb2257feafd7d\Symfony\Component\DependencyInjection\ServiceLocator
{
    private $factory;
    private $serviceMap;
    private $serviceTypes;
    public function __construct(\Closure $factory, array $serviceMap, array $serviceTypes = null)
    {
        $this->factory = $factory;
        $this->serviceMap = $serviceMap;
        $this->serviceTypes = $serviceTypes;
        parent::__construct($serviceMap);
    }
    /**
     * {@inheritdoc}
     */
    public function get($id)
    {
        return isset($this->serviceMap[$id]) ? ($this->factory)(...$this->serviceMap[$id]) : parent::get($id);
    }
    /**
     * {@inheritdoc}
     */
    public function getProvidedServices() : array
    {
        return $this->serviceTypes ?? ($this->serviceTypes = \array_map(function () {
            return '?';
        }, $this->serviceMap));
    }
}
