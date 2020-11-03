<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper43a95e2f69bc\Symfony\Component\HttpKernel\EventListener;

use _PhpScoper43a95e2f69bc\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoper43a95e2f69bc\Symfony\Component\HttpFoundation\StreamedResponse;
use _PhpScoper43a95e2f69bc\Symfony\Component\HttpKernel\Event\ResponseEvent;
use _PhpScoper43a95e2f69bc\Symfony\Component\HttpKernel\KernelEvents;
/**
 * StreamedResponseListener is responsible for sending the Response
 * to the client.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class StreamedResponseListener implements \_PhpScoper43a95e2f69bc\Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    /**
     * Filters the Response.
     */
    public function onKernelResponse(\_PhpScoper43a95e2f69bc\Symfony\Component\HttpKernel\Event\ResponseEvent $event)
    {
        if (!$event->isMasterRequest()) {
            return;
        }
        $response = $event->getResponse();
        if ($response instanceof \_PhpScoper43a95e2f69bc\Symfony\Component\HttpFoundation\StreamedResponse) {
            $response->send();
        }
    }
    public static function getSubscribedEvents() : array
    {
        return [\_PhpScoper43a95e2f69bc\Symfony\Component\HttpKernel\KernelEvents::RESPONSE => ['onKernelResponse', -1024]];
    }
}
