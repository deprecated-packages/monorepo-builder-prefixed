<?php

namespace _PhpScopera3403994bd90\Psr\Log;

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
    public function setLogger(\_PhpScopera3403994bd90\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
