<?php

namespace _PhpScoperdfa889d8967a\Psr\Log;

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
    public function setLogger(\_PhpScoperdfa889d8967a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
