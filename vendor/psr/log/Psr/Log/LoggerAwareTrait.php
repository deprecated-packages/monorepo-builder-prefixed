<?php

namespace _PhpScoperd1c9c8ec01a8\Psr\Log;

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
    public function setLogger(\_PhpScoperd1c9c8ec01a8\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
