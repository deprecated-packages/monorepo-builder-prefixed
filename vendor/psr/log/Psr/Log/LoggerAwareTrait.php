<?php

namespace _PhpScopere846b54512fc\Psr\Log;

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
    public function setLogger(\_PhpScopere846b54512fc\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
