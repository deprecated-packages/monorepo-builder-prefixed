<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper95e170f0b4ac\Symfony\Component\HttpKernel\EventListener;

use _PhpScoper95e170f0b4ac\Psr\Container\ContainerInterface;
use _PhpScoper95e170f0b4ac\Symfony\Component\HttpFoundation\Session\SessionInterface;
/**
 * Sets the session in the request.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class TestSessionListener extends \_PhpScoper95e170f0b4ac\Symfony\Component\HttpKernel\EventListener\AbstractTestSessionListener
{
    private $container;
    public function __construct(\_PhpScoper95e170f0b4ac\Psr\Container\ContainerInterface $container, array $sessionOptions = [])
    {
        $this->container = $container;
        parent::__construct($sessionOptions);
    }
    protected function getSession() : ?\_PhpScoper95e170f0b4ac\Symfony\Component\HttpFoundation\Session\SessionInterface
    {
        if (!$this->container->has('session')) {
            return null;
        }
        return $this->container->get('session');
    }
}
