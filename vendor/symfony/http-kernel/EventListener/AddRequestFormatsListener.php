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
use _PhpScoperafeb7177e88e\Symfony\Component\HttpKernel\Event\GetResponseEvent;
use _PhpScoperafeb7177e88e\Symfony\Component\HttpKernel\KernelEvents;
/**
 * Adds configured formats to each request.
 *
 * @author Gildas Quemener <gildas.quemener@gmail.com>
 *
 * @final since Symfony 4.3
 */
class AddRequestFormatsListener implements \_PhpScoperafeb7177e88e\Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    protected $formats;
    public function __construct(array $formats)
    {
        $this->formats = $formats;
    }
    /**
     * Adds request formats.
     */
    public function onKernelRequest(\_PhpScoperafeb7177e88e\Symfony\Component\HttpKernel\Event\GetResponseEvent $event)
    {
        $request = $event->getRequest();
        foreach ($this->formats as $format => $mimeTypes) {
            $request->setFormat($format, $mimeTypes);
        }
    }
    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [\_PhpScoperafeb7177e88e\Symfony\Component\HttpKernel\KernelEvents::REQUEST => ['onKernelRequest', 100]];
    }
}
