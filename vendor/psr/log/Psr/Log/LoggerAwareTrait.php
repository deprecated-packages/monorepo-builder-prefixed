<?php

namespace _PhpScopere73d4c0b7ec8\Psr\Log;

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
    public function setLogger(\_PhpScopere73d4c0b7ec8\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
