<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere7b233920bf2\Symfony\Component\HttpKernel\EventListener;

use _PhpScopere7b233920bf2\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScopere7b233920bf2\Symfony\Component\HttpKernel\Event\RequestEvent;
use _PhpScopere7b233920bf2\Symfony\Component\HttpKernel\KernelEvents;
/**
 * Adds configured formats to each request.
 *
 * @author Gildas Quemener <gildas.quemener@gmail.com>
 *
 * @final
 */
class AddRequestFormatsListener implements \_PhpScopere7b233920bf2\Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    protected $formats;
    public function __construct(array $formats)
    {
        $this->formats = $formats;
    }
    /**
     * Adds request formats.
     */
    public function onKernelRequest(\_PhpScopere7b233920bf2\Symfony\Component\HttpKernel\Event\RequestEvent $event)
    {
        $request = $event->getRequest();
        foreach ($this->formats as $format => $mimeTypes) {
            $request->setFormat($format, $mimeTypes);
        }
    }
    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents() : array
    {
        return [\_PhpScopere7b233920bf2\Symfony\Component\HttpKernel\KernelEvents::REQUEST => ['onKernelRequest', 100]];
    }
}
