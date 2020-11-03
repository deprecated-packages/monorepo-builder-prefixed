<?php

namespace _PhpScoper8a421ef9d4c6\Psr\Log;

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
    public function setLogger(\_PhpScoper8a421ef9d4c6\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
