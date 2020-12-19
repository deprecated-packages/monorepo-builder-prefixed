<?php

namespace _PhpScoperf6f8e31183c3\Psr\Log;

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
    public function setLogger(\_PhpScoperf6f8e31183c3\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
