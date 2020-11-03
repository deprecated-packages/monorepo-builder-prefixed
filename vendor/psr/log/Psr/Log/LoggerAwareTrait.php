<?php

namespace _PhpScoper30e4ccea42bd\Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /**
     * The logger instance.
     *
     * @var LoggerInterface
     */
    protected $logger;
    /**
     * Sets a logger.
     *
     * @param LoggerInterface $logger
     */
    public function setLogger(\_PhpScoper30e4ccea42bd\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
