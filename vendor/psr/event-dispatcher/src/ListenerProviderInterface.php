<?php

declare (strict_types=1);
namespace _PhpScoper6b2f62f5c7a4\Psr\EventDispatcher;

/**
 * Mapper from an event to the listeners that are applicable to that event.
 */
interface ListenerProviderInterface
{
    /**
     * @param object $event
     *   An event for which to return the relevant listeners.
     * @return iterable[callable]
     *   An iterable (array, iterator, or generator) of callables.  Each
     *   callable MUST be type-compatible with $event.
     */
    public function getListenersForEvent(object $event) : iterable;
}
