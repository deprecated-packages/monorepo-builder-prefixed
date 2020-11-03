<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdd9048e10aae\Symfony\Component\HttpKernel\EventListener;

use _PhpScoperdd9048e10aae\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoperdd9048e10aae\Symfony\Component\HttpFoundation\Request;
use _PhpScoperdd9048e10aae\Symfony\Component\HttpFoundation\RequestStack;
use _PhpScoperdd9048e10aae\Symfony\Component\HttpKernel\Event\FinishRequestEvent;
use _PhpScoperdd9048e10aae\Symfony\Component\HttpKernel\Event\KernelEvent;
use _PhpScoperdd9048e10aae\Symfony\Component\HttpKernel\Event\RequestEvent;
use _PhpScoperdd9048e10aae\Symfony\Component\HttpKernel\KernelEvents;
use _PhpScoperdd9048e10aae\Symfony\Component\Routing\RequestContextAwareInterface;
/**
 * Initializes the locale based on the current request.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class LocaleListener implements \_PhpScoperdd9048e10aae\Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    private $router;
    private $defaultLocale;
    private $requestStack;
    public function __construct(\_PhpScoperdd9048e10aae\Symfony\Component\HttpFoundation\RequestStack $requestStack, string $defaultLocale = 'en', \_PhpScoperdd9048e10aae\Symfony\Component\Routing\RequestContextAwareInterface $router = null)
    {
        $this->defaultLocale = $defaultLocale;
        $this->requestStack = $requestStack;
        $this->router = $router;
    }
    public function setDefaultLocale(\_PhpScoperdd9048e10aae\Symfony\Component\HttpKernel\Event\KernelEvent $event)
    {
        $event->getRequest()->setDefaultLocale($this->defaultLocale);
    }
    public function onKernelRequest(\_PhpScoperdd9048e10aae\Symfony\Component\HttpKernel\Event\RequestEvent $event)
    {
        $request = $event->getRequest();
        $this->setLocale($request);
        $this->setRouterContext($request);
    }
    public function onKernelFinishRequest(\_PhpScoperdd9048e10aae\Symfony\Component\HttpKernel\Event\FinishRequestEvent $event)
    {
        if (null !== ($parentRequest = $this->requestStack->getParentRequest())) {
            $this->setRouterContext($parentRequest);
        }
    }
    private function setLocale(\_PhpScoperdd9048e10aae\Symfony\Component\HttpFoundation\Request $request)
    {
        if ($locale = $request->attributes->get('_locale')) {
            $request->setLocale($locale);
        }
    }
    private function setRouterContext(\_PhpScoperdd9048e10aae\Symfony\Component\HttpFoundation\Request $request)
    {
        if (null !== $this->router) {
            $this->router->getContext()->setParameter('_locale', $request->getLocale());
        }
    }
    public static function getSubscribedEvents() : array
    {
        return [\_PhpScoperdd9048e10aae\Symfony\Component\HttpKernel\KernelEvents::REQUEST => [
            ['setDefaultLocale', 100],
            // must be registered after the Router to have access to the _locale
            ['onKernelRequest', 16],
        ], \_PhpScoperdd9048e10aae\Symfony\Component\HttpKernel\KernelEvents::FINISH_REQUEST => [['onKernelFinishRequest', 0]]];
    }
}
