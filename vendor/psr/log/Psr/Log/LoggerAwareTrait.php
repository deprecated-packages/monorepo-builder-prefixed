<?php

namespace _PhpScoperfccd2ca01403\Psr\Log;

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
    public function setLogger(\_PhpScoperfccd2ca01403\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
