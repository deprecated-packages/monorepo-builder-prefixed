<?php

namespace _PhpScopera28be7b3fe51\Psr\Log;

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
    public function setLogger(\_PhpScopera28be7b3fe51\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
