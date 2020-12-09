<?php

namespace _PhpScopera85504f0ea7b\Psr\Log;

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
    public function setLogger(\_PhpScopera85504f0ea7b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
