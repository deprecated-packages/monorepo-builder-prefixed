<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper9dd242015966\Symfony\Component\HttpKernel\EventListener;

use _PhpScoper9dd242015966\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoper9dd242015966\Symfony\Component\HttpKernel\Event\ResponseEvent;
use _PhpScoper9dd242015966\Symfony\Component\HttpKernel\KernelEvents;
/**
 * ResponseListener fixes the Response headers based on the Request.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class ResponseListener implements \_PhpScoper9dd242015966\Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    private $charset;
    public function __construct(string $charset)
    {
        $this->charset = $charset;
    }
    /**
     * Filters the Response.
     */
    public function onKernelResponse(\_PhpScoper9dd242015966\Symfony\Component\HttpKernel\Event\ResponseEvent $event)
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
    public static function getSubscribedEvents() : array
    {
        return [\_PhpScoper9dd242015966\Symfony\Component\HttpKernel\KernelEvents::RESPONSE => 'onKernelResponse'];
    }
}
