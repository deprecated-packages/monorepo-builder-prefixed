<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd6a443964d04\Symfony\Component\HttpKernel\EventListener;

use _PhpScoperd6a443964d04\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoperd6a443964d04\Symfony\Component\HttpFoundation\StreamedResponse;
use _PhpScoperd6a443964d04\Symfony\Component\HttpKernel\Event\ResponseEvent;
use _PhpScoperd6a443964d04\Symfony\Component\HttpKernel\KernelEvents;
/**
 * StreamedResponseListener is responsible for sending the Response
 * to the client.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class StreamedResponseListener implements \_PhpScoperd6a443964d04\Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    /**
     * Filters the Response.
     */
    public function onKernelResponse(\_PhpScoperd6a443964d04\Symfony\Component\HttpKernel\Event\ResponseEvent $event)
    {
        if (!$event->isMasterRequest()) {
            return;
        }
        $response = $event->getResponse();
        if ($response instanceof \_PhpScoperd6a443964d04\Symfony\Component\HttpFoundation\StreamedResponse) {
            $response->send();
        }
    }
    public static function getSubscribedEvents() : array
    {
        return [\_PhpScoperd6a443964d04\Symfony\Component\HttpKernel\KernelEvents::RESPONSE => ['onKernelResponse', -1024]];
    }
}
