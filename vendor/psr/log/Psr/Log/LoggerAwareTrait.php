<?php

namespace _PhpScoperd4e30d8318e8\Psr\Log;

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
    public function setLogger(\_PhpScoperd4e30d8318e8\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
