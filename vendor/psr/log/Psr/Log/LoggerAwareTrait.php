<?php

namespace _PhpScopercdc90a6628b6\Psr\Log;

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
    public function setLogger(\_PhpScopercdc90a6628b6\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
