<?php

namespace _PhpScopere97aad8070b4\Psr\Log;

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
    public function setLogger(\_PhpScopere97aad8070b4\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
