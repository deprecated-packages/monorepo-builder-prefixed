<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperae7532b8c744\Symfony\Component\HttpKernel\EventListener;

use _PhpScoperae7532b8c744\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoperae7532b8c744\Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use _PhpScoperae7532b8c744\Symfony\Component\HttpKernel\KernelEvents;
/**
 * ResponseListener fixes the Response headers based on the Request.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class ResponseListener implements \_PhpScoperae7532b8c744\Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    private $charset;
    public function __construct(string $charset)
    {
        $this->charset = $charset;
    }
    /**
     * Filters the Response.
     */
    public function onKernelResponse(\_PhpScoperae7532b8c744\Symfony\Component\HttpKernel\Event\FilterResponseEvent $event)
    {
        if (!$event->isMasterRequest()) {
            return;
        }
        $response = $event->getResponse();
        if (null === $response->getCharset()) {
            $response->setCharset($this->charset);
        }
        $response->prepare($event->getRequest());
    }
    public static function getSubscribedEvents()
    {
        return [\_PhpScoperae7532b8c744\Symfony\Component\HttpKernel\KernelEvents::RESPONSE => 'onKernelResponse'];
    }
}
