<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc9dc9dec1b4a\Symfony\Component\HttpKernel\EventListener;

use _PhpScoperc9dc9dec1b4a\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoperc9dc9dec1b4a\Symfony\Component\HttpFoundation\Request;
use _PhpScoperc9dc9dec1b4a\Symfony\Component\HttpFoundation\RequestStack;
use _PhpScoperc9dc9dec1b4a\Symfony\Component\HttpKernel\Event\FinishRequestEvent;
use _PhpScoperc9dc9dec1b4a\Symfony\Component\HttpKernel\Event\GetResponseEvent;
use _PhpScoperc9dc9dec1b4a\Symfony\Component\HttpKernel\Event\KernelEvent;
use _PhpScoperc9dc9dec1b4a\Symfony\Component\HttpKernel\KernelEvents;
use _PhpScoperc9dc9dec1b4a\Symfony\Component\Routing\RequestContextAwareInterface;
/**
 * Initializes the locale based on the current request.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class LocaleListener implements \_PhpScoperc9dc9dec1b4a\Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    private $router;
    private $defaultLocale;
    private $requestStack;
    public function __construct(\_PhpScoperc9dc9dec1b4a\Symfony\Component\HttpFoundation\RequestStack $requestStack, string $defaultLocale = 'en', \_PhpScoperc9dc9dec1b4a\Symfony\Component\Routing\RequestContextAwareInterface $router = null)
    {
        $this->defaultLocale = $defaultLocale;
        $this->requestStack = $requestStack;
        $this->router = $router;
    }
    public function setDefaultLocale(\_PhpScoperc9dc9dec1b4a\Symfony\Component\HttpKernel\Event\KernelEvent $event)
    {
        $event->getRequest()->setDefaultLocale($this->defaultLocale);
    }
    public function onKernelRequest(\_PhpScoperc9dc9dec1b4a\Symfony\Component\HttpKernel\Event\GetResponseEvent $event)
    {
        $request = $event->getRequest();
        $this->setLocale($request);
        $this->setRouterContext($request);
    }
    public function onKernelFinishRequest(\_PhpScoperc9dc9dec1b4a\Symfony\Component\HttpKernel\Event\FinishRequestEvent $event)
    {
        if (null !== ($parentRequest = $this->requestStack->getParentRequest())) {
            $this->setRouterContext($parentRequest);
        }
    }
    private function setLocale(\_PhpScoperc9dc9dec1b4a\Symfony\Component\HttpFoundation\Request $request)
    {
        if ($locale = $request->attributes->get('_locale')) {
            $request->setLocale($locale);
        }
    }
    private function setRouterContext(\_PhpScoperc9dc9dec1b4a\Symfony\Component\HttpFoundation\Request $request)
    {
        if (null !== $this->router) {
            $this->router->getContext()->setParameter('_locale', $request->getLocale());
        }
    }
    public static function getSubscribedEvents()
    {
        return [\_PhpScoperc9dc9dec1b4a\Symfony\Component\HttpKernel\KernelEvents::REQUEST => [
            ['setDefaultLocale', 100],
            // must be registered after the Router to have access to the _locale
            ['onKernelRequest', 16],
        ], \_PhpScoperc9dc9dec1b4a\Symfony\Component\HttpKernel\KernelEvents::FINISH_REQUEST => [['onKernelFinishRequest', 0]]];
    }
}
