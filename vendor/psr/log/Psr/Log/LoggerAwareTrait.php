<?php

namespace _PhpScopere691b6ebfa72\Psr\Log;

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
    public function setLogger(\_PhpScopere691b6ebfa72\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
