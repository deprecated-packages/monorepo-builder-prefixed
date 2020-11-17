<?php

namespace _PhpScopere8131a326633\Psr\Log;

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
    public function setLogger(\_PhpScopere8131a326633\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
