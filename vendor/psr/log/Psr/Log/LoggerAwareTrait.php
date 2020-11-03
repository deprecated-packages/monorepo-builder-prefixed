<?php

namespace _PhpScoperee8f03533f8b\Psr\Log;

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
    public function setLogger(\_PhpScoperee8f03533f8b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
