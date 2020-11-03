<?php

namespace _PhpScoperf9ff1c3447b1\Psr\Log;

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
    public function setLogger(\_PhpScoperf9ff1c3447b1\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
