<?php

namespace _PhpScoperf2e2fcfe7ee6\Psr\Log;

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
    public function setLogger(\_PhpScoperf2e2fcfe7ee6\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
