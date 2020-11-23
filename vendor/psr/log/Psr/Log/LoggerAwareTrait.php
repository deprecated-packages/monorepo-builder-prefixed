<?php

namespace _PhpScopere2a14c1f9852\Psr\Log;

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
    public function setLogger(\_PhpScopere2a14c1f9852\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
