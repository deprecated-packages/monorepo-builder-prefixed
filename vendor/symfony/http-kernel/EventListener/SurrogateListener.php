<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbecbc4cd500f\Symfony\Component\HttpKernel\EventListener;

use _PhpScoperbecbc4cd500f\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoperbecbc4cd500f\Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use _PhpScoperbecbc4cd500f\Symfony\Component\HttpKernel\HttpCache\HttpCache;
use _PhpScoperbecbc4cd500f\Symfony\Component\HttpKernel\HttpCache\SurrogateInterface;
use _PhpScoperbecbc4cd500f\Symfony\Component\HttpKernel\KernelEvents;
/**
 * SurrogateListener adds a Surrogate-Control HTTP header when the Response needs to be parsed for Surrogates.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class SurrogateListener implements \_PhpScoperbecbc4cd500f\Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    private $surrogate;
    public function __construct(\_PhpScoperbecbc4cd500f\Symfony\Component\HttpKernel\HttpCache\SurrogateInterface $surrogate = null)
    {
        $this->surrogate = $surrogate;
    }
    /**
     * Filters the Response.
     */
    public function onKernelResponse(\_PhpScoperbecbc4cd500f\Symfony\Component\HttpKernel\Event\FilterResponseEvent $event)
    {
        if (!$event->isMasterRequest()) {
            return;
        }
        $kernel = $event->getKernel();
        $surrogate = $this->surrogate;
        if ($kernel instanceof \_PhpScoperbecbc4cd500f\Symfony\Component\HttpKernel\HttpCache\HttpCache) {
            $surrogate = $kernel->getSurrogate();
            if (null !== $this->surrogate && $this->surrogate->getName() !== $surrogate->getName()) {
                $surrogate = $this->surrogate;
            }
        }
        if (null === $surrogate) {
            return;
        }
        $surrogate->addSurrogateControl($event->getResponse());
    }
    public static function getSubscribedEvents()
    {
        return [\_PhpScoperbecbc4cd500f\Symfony\Component\HttpKernel\KernelEvents::RESPONSE => 'onKernelResponse'];
    }
}
