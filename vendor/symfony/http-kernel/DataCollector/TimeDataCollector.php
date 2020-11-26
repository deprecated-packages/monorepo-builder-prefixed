<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper485f3a9238ad\Symfony\Component\HttpKernel\DataCollector;

use _PhpScoper485f3a9238ad\Symfony\Component\HttpFoundation\Request;
use _PhpScoper485f3a9238ad\Symfony\Component\HttpFoundation\Response;
use _PhpScoper485f3a9238ad\Symfony\Component\HttpKernel\KernelInterface;
use _PhpScoper485f3a9238ad\Symfony\Component\Stopwatch\Stopwatch;
use _PhpScoper485f3a9238ad\Symfony\Component\Stopwatch\StopwatchEvent;
/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.4
 */
class TimeDataCollector extends \_PhpScoper485f3a9238ad\Symfony\Component\HttpKernel\DataCollector\DataCollector implements \_PhpScoper485f3a9238ad\Symfony\Component\HttpKernel\DataCollector\LateDataCollectorInterface
{
    protected $kernel;
    protected $stopwatch;
    public function __construct(\_PhpScoper485f3a9238ad\Symfony\Component\HttpKernel\KernelInterface $kernel = null, \_PhpScoper485f3a9238ad\Symfony\Component\Stopwatch\Stopwatch $stopwatch = null)
    {
        $this->kernel = $kernel;
        $this->stopwatch = $stopwatch;
    }
    /**
     * {@inheritdoc}
     *
     * @param \Throwable|null $exception
     */
    public function collect(\_PhpScoper485f3a9238ad\Symfony\Component\HttpFoundation\Request $request, \_PhpScoper485f3a9238ad\Symfony\Component\HttpFoundation\Response $response)
    {
        if (null !== $this->kernel) {
            $startTime = $this->kernel->getStartTime();
        } else {
            $startTime = $request->server->get('REQUEST_TIME_FLOAT');
        }
        $this->data = ['token' => $response->headers->get('X-Debug-Token'), 'start_time' => $startTime * 1000, 'events' => [], 'stopwatch_installed' => \class_exists(\_PhpScoper485f3a9238ad\Symfony\Component\Stopwatch\Stopwatch::class, \false)];
    }
    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        $this->data = [];
        if (null !== $this->stopwatch) {
            $this->stopwatch->reset();
        }
    }
    /**
     * {@inheritdoc}
     */
    public function lateCollect()
    {
        if (null !== $this->stopwatch && isset($this->data['token'])) {
            $this->setEvents($this->stopwatch->getSectionEvents($this->data['token']));
        }
        unset($this->data['token']);
    }
    /**
     * Sets the request events.
     *
     * @param StopwatchEvent[] $events The request events
     */
    public function setEvents(array $events)
    {
        foreach ($events as $event) {
            $event->ensureStopped();
        }
        $this->data['events'] = $events;
    }
    /**
     * Gets the request events.
     *
     * @return StopwatchEvent[] The request events
     */
    public function getEvents()
    {
        return $this->data['events'];
    }
    /**
     * Gets the request elapsed time.
     *
     * @return float The elapsed time
     */
    public function getDuration()
    {
        if (!isset($this->data['events']['__section__'])) {
            return 0;
        }
        $lastEvent = $this->data['events']['__section__'];
        return $lastEvent->getOrigin() + $lastEvent->getDuration() - $this->getStartTime();
    }
    /**
     * Gets the initialization time.
     *
     * This is the time spent until the beginning of the request handling.
     *
     * @return float The elapsed time
     */
    public function getInitTime()
    {
        if (!isset($this->data['events']['__section__'])) {
            return 0;
        }
        return $this->data['events']['__section__']->getOrigin() - $this->getStartTime();
    }
    /**
     * Gets the request time.
     *
     * @return float
     */
    public function getStartTime()
    {
        return $this->data['start_time'];
    }
    /**
     * @return bool whether or not the stopwatch component is installed
     */
    public function isStopwatchInstalled()
    {
        return $this->data['stopwatch_installed'];
    }
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'time';
    }
}
