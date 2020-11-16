<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperafeb7177e88e\Symfony\Component\HttpKernel\EventListener;

use _PhpScoperafeb7177e88e\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoperafeb7177e88e\Symfony\Component\HttpFoundation\Request;
use _PhpScoperafeb7177e88e\Symfony\Component\HttpFoundation\RequestStack;
use _PhpScoperafeb7177e88e\Symfony\Component\HttpKernel\Event\FinishRequestEvent;
use _PhpScoperafeb7177e88e\Symfony\Component\HttpKernel\Event\RequestEvent;
use _PhpScoperafeb7177e88e\Symfony\Component\HttpKernel\KernelEvents;
use _PhpScoperafeb7177e88e\Symfony\Contracts\Translation\LocaleAwareInterface;
/**
 * Pass the current locale to the provided services.
 *
 * @author Pierre Bobiet <pierrebobiet@gmail.com>
 */
class LocaleAwareListener implements \_PhpScoperafeb7177e88e\Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    private $localeAwareServices;
    private $requestStack;
    /**
     * @param LocaleAwareInterface[] $localeAwareServices
     */
    public function __construct(iterable $localeAwareServices, \_PhpScoperafeb7177e88e\Symfony\Component\HttpFoundation\RequestStack $requestStack)
    {
        $this->localeAwareServices = $localeAwareServices;
        $this->requestStack = $requestStack;
    }
    public function onKernelRequest(\_PhpScoperafeb7177e88e\Symfony\Component\HttpKernel\Event\RequestEvent $event) : void
    {
        $this->setLocale($event->getRequest()->getLocale(), $event->getRequest()->getDefaultLocale());
    }
    public function onKernelFinishRequest(\_PhpScoperafeb7177e88e\Symfony\Component\HttpKernel\Event\FinishRequestEvent $event) : void
    {
        if (null === ($parentRequest = $this->requestStack->getParentRequest())) {
            foreach ($this->localeAwareServices as $service) {
                $service->setLocale($event->getRequest()->getDefaultLocale());
            }
            return;
        }
        $this->setLocale($parentRequest->getLocale(), $parentRequest->getDefaultLocale());
    }
    public static function getSubscribedEvents()
    {
        return [
            // must be registered after the Locale listener
            \_PhpScoperafeb7177e88e\Symfony\Component\HttpKernel\KernelEvents::REQUEST => [['onKernelRequest', 15]],
            \_PhpScoperafeb7177e88e\Symfony\Component\HttpKernel\KernelEvents::FINISH_REQUEST => [['onKernelFinishRequest', -15]],
        ];
    }
    private function setLocale(string $locale, string $defaultLocale) : void
    {
        foreach ($this->localeAwareServices as $service) {
            try {
                $service->setLocale($locale);
            } catch (\InvalidArgumentException $e) {
                $service->setLocale($defaultLocale);
            }
        }
    }
}
