<?php

namespace _PhpScopera00544d51e07\Psr\Log;

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
    public function setLogger(\_PhpScopera00544d51e07\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
