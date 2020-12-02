<?php

namespace _PhpScopera2ff5fd2b59c\Psr\Log;

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
    public function setLogger(\_PhpScopera2ff5fd2b59c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
