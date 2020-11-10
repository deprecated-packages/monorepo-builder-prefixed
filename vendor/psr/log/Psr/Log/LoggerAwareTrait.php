<?php

namespace _PhpScopera31d0d6ff47a\Psr\Log;

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
    public function setLogger(\_PhpScopera31d0d6ff47a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
