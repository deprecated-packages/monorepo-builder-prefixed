<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbb737891eded\Symfony\Component\EventDispatcher;

use _PhpScoperbb737891eded\Psr\EventDispatcher\StoppableEventInterface;
use _PhpScoperbb737891eded\Symfony\Contracts\EventDispatcher\Event as ContractsEvent;
/**
 * @internal to be removed in 5.0.
 */
final class LegacyEventProxy extends \_PhpScoperbb737891eded\Symfony\Component\EventDispatcher\Event
{
    private $event;
    /**
     * @param object $event
     */
    public function __construct($event)
    {
        $this->event = $event;
    }
    /**
     * @return object $event
     */
    public function getEvent()
    {
        return $this->event;
    }
    public function isPropagationStopped() : bool
    {
        if (!$this->event instanceof \_PhpScoperbb737891eded\Symfony\Contracts\EventDispatcher\Event && !$this->event instanceof \_PhpScoperbb737891eded\Psr\EventDispatcher\StoppableEventInterface) {
            return \false;
        }
        return $this->event->isPropagationStopped();
    }
    public function stopPropagation()
    {
        if (!$this->event instanceof \_PhpScoperbb737891eded\Symfony\Contracts\EventDispatcher\Event) {
            return;
        }
        $this->event->stopPropagation();
    }
    public function __call($name, $args)
    {
        return $this->event->{$name}(...$args);
    }
}
