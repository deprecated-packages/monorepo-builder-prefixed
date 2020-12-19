<?php

namespace _PhpScopere71835ca1415\Psr\Log;

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
    public function setLogger(\_PhpScopere71835ca1415\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
