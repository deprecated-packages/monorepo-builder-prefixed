<?php

namespace _PhpScopere32570efa19a\Psr\Log;

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
    public function setLogger(\_PhpScopere32570efa19a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
