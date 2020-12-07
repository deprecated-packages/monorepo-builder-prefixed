<?php

namespace _PhpScoperdab52924cf3e\Psr\Log;

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
    public function setLogger(\_PhpScoperdab52924cf3e\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
