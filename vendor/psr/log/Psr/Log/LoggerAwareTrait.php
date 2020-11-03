<?php

namespace _PhpScoperf968abd60cb0\Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /** @var LoggerInterface */
    protected $logger;
    /**
     * Sets a logger.
     * 
     * @param LoggerInterface $logger
     */
    public function setLogger(\_PhpScoperf968abd60cb0\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
