<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb0f70d760c3d\Symfony\Component\HttpKernel\EventListener;

use _PhpScoperb0f70d760c3d\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoperb0f70d760c3d\Symfony\Component\HttpFoundation\Cookie;
use _PhpScoperb0f70d760c3d\Symfony\Component\HttpFoundation\Session\Session;
use _PhpScoperb0f70d760c3d\Symfony\Component\HttpFoundation\Session\SessionInterface;
use _PhpScoperb0f70d760c3d\Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use _PhpScoperb0f70d760c3d\Symfony\Component\HttpKernel\Event\GetResponseEvent;
use _PhpScoperb0f70d760c3d\Symfony\Component\HttpKernel\KernelEvents;
/**
 * TestSessionListener.
 *
 * Saves session in test environment.
 *
 * @author Bulat Shakirzyanov <mallluhuct@gmail.com>
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal since Symfony 4.3
 */
abstract class AbstractTestSessionListener implements \_PhpScoperb0f70d760c3d\Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    private $sessionId;
    private $sessionOptions;
    public function __construct(array $sessionOptions = [])
    {
        $this->sessionOptions = $sessionOptions;
    }
    public function onKernelRequest(\_PhpScoperb0f70d760c3d\Symfony\Component\HttpKernel\Event\GetResponseEvent $event)
    {
        if (!$event->isMasterRequest()) {
            return;
        }
        // bootstrap the session
        if (!($session = $this->getSession())) {
            return;
        }
        $cookies = $event->getRequest()->cookies;
        if ($cookies->has($session->getName())) {
            $this->sessionId = $cookies->get($session->getName());
            $session->setId($this->sessionId);
        }
    }
    /**
     * Checks if session was initialized and saves if current request is master
     * Runs on 'kernel.response' in test environment.
     */
    public function onKernelResponse(\_PhpScoperb0f70d760c3d\Symfony\Component\HttpKernel\Event\FilterResponseEvent $event)
    {
        if (!$event->isMasterRequest()) {
            return;
        }
        $request = $event->getRequest();
        if (!$request->hasSession()) {
            return;
        }
        $session = $request->getSession();
        if ($wasStarted = $session->isStarted()) {
            $session->save();
        }
        if ($session instanceof \_PhpScoperb0f70d760c3d\Symfony\Component\HttpFoundation\Session\Session ? !$session->isEmpty() || null !== $this->sessionId && $session->getId() !== $this->sessionId : $wasStarted) {
            $params = \session_get_cookie_params() + ['samesite' => null];
            foreach ($this->sessionOptions as $k => $v) {
                if (0 === \strpos($k, 'cookie_')) {
                    $params[\substr($k, 7)] = $v;
                }
            }
            foreach ($event->getResponse()->headers->getCookies() as $cookie) {
                if ($session->getName() === $cookie->getName() && $params['path'] === $cookie->getPath() && $params['domain'] == $cookie->getDomain()) {
                    return;
                }
            }
            $event->getResponse()->headers->setCookie(new \_PhpScoperb0f70d760c3d\Symfony\Component\HttpFoundation\Cookie($session->getName(), $session->getId(), 0 === $params['lifetime'] ? 0 : \time() + $params['lifetime'], $params['path'], $params['domain'], $params['secure'], $params['httponly'], \false, $params['samesite'] ?: null));
            $this->sessionId = $session->getId();
        }
    }
    public static function getSubscribedEvents()
    {
        return [\_PhpScoperb0f70d760c3d\Symfony\Component\HttpKernel\KernelEvents::REQUEST => ['onKernelRequest', 192], \_PhpScoperb0f70d760c3d\Symfony\Component\HttpKernel\KernelEvents::RESPONSE => ['onKernelResponse', -128]];
    }
    /**
     * Gets the session object.
     *
     * @return SessionInterface|null A SessionInterface instance or null if no session is available
     */
    protected abstract function getSession();
}
