<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\EventListener;

use _PhpScoperbe77f3b0e77d\Psr\Container\ContainerInterface;
use _PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Session\SessionInterface;
use _PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
/**
 * Sets the session in the request.
 *
 * When the passed container contains a "session_storage" entry which
 * holds a NativeSessionStorage instance, the "cookie_secure" option
 * will be set to true whenever the current master request is secure.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class SessionListener extends \_PhpScoperbe77f3b0e77d\Symfony\Component\HttpKernel\EventListener\AbstractSessionListener
{
    public function __construct(\_PhpScoperbe77f3b0e77d\Psr\Container\ContainerInterface $container)
    {
        $this->container = $container;
    }
    protected function getSession() : ?\_PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Session\SessionInterface
    {
        if (!$this->container->has('session')) {
            return null;
        }
        if ($this->container->has('session_storage') && ($storage = $this->container->get('session_storage')) instanceof \_PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage && ($masterRequest = $this->container->get('request_stack')->getMasterRequest()) && $masterRequest->isSecure()) {
            $storage->setOptions(['cookie_secure' => \true]);
        }
        return $this->container->get('session');
    }
}
