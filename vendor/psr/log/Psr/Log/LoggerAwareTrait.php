<?php

namespace _PhpScopere3ed9f66440c\Psr\Log;

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
    public function setLogger(\_PhpScopere3ed9f66440c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
