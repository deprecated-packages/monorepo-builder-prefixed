<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb25e75e9febe\Symfony\Component\HttpKernel\EventListener;

@\trigger_error(\sprintf('The "%s" class is deprecated since Symfony 4.1, use AbstractSessionListener instead.', \_PhpScoperb25e75e9febe\Symfony\Component\HttpKernel\EventListener\SaveSessionListener::class), \E_USER_DEPRECATED);
use _PhpScoperb25e75e9febe\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoperb25e75e9febe\Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use _PhpScoperb25e75e9febe\Symfony\Component\HttpKernel\KernelEvents;
/**
 * @author Tobias Schultze <http://tobion.de>
 *
 * @deprecated since Symfony 4.1, use AbstractSessionListener instead
 */
class SaveSessionListener implements \_PhpScoperb25e75e9febe\Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    public function onKernelResponse(\_PhpScoperb25e75e9febe\Symfony\Component\HttpKernel\Event\FilterResponseEvent $event)
    {
        if (!$event->isMasterRequest()) {
            return;
        }
        $request = $event->getRequest();
        if ($request->hasSession() && ($session = $request->getSession())->isStarted()) {
            $session->save();
        }
    }
    public static function getSubscribedEvents()
    {
        return [
            // low priority but higher than StreamedResponseListener
            \_PhpScoperb25e75e9febe\Symfony\Component\HttpKernel\KernelEvents::RESPONSE => [['onKernelResponse', -1000]],
        ];
    }
}
