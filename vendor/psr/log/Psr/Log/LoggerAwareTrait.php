<?php

namespace _PhpScopere9939b84e968\Psr\Log;

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
    public function setLogger(\_PhpScopere9939b84e968\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
