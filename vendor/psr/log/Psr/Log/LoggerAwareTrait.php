<?php

namespace _PhpScopere0f28e6b9bde\Psr\Log;

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
    public function setLogger(\_PhpScopere0f28e6b9bde\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
