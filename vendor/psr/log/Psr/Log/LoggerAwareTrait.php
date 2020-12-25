<?php

namespace _PhpScoperff72c38d4e2a\Psr\Log;

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
    public function setLogger(\_PhpScoperff72c38d4e2a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
