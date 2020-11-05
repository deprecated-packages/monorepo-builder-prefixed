<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper3ac0b040c6af\Symfony\Component\HttpKernel\EventListener;

use _PhpScoper3ac0b040c6af\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoper3ac0b040c6af\Symfony\Component\HttpKernel\Event\ResponseEvent;
use _PhpScoper3ac0b040c6af\Symfony\Component\HttpKernel\KernelEvents;
/**
 * Ensures that the application is not indexed by search engines.
 *
 * @author Gary PEGEOT <garypegeot@gmail.com>
 */
class DisallowRobotsIndexingListener implements \_PhpScoper3ac0b040c6af\Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    private const HEADER_NAME = 'X-Robots-Tag';
    public function onResponse(\_PhpScoper3ac0b040c6af\Symfony\Component\HttpKernel\Event\ResponseEvent $event) : void
    {
        if (!$event->getResponse()->headers->has(static::HEADER_NAME)) {
            $event->getResponse()->headers->set(static::HEADER_NAME, 'noindex');
        }
    }
    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [\_PhpScoper3ac0b040c6af\Symfony\Component\HttpKernel\KernelEvents::RESPONSE => ['onResponse', -255]];
    }
}
