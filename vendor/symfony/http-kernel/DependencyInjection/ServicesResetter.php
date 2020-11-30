<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper2e873f93a162\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoper2e873f93a162\Symfony\Contracts\Service\ResetInterface;
/**
 * Resets provided services.
 *
 * @author Alexander M. Turek <me@derrabus.de>
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class ServicesResetter implements \_PhpScoper2e873f93a162\Symfony\Contracts\Service\ResetInterface
{
    private $resettableServices;
    private $resetMethods;
    public function __construct(\Traversable $resettableServices, array $resetMethods)
    {
        $this->resettableServices = $resettableServices;
        $this->resetMethods = $resetMethods;
    }
    public function reset()
    {
        foreach ($this->resettableServices as $id => $service) {
            $service->{$this->resetMethods[$id]}();
        }
    }
}
