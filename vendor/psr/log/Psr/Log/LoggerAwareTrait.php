<?php

namespace _PhpScopera2f1d1d42b88\Psr\Log;

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
    public function setLogger(\_PhpScopera2f1d1d42b88\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
