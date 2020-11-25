<?php

namespace _PhpScopera5e5d165d78c\Psr\Log;

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
    public function setLogger(\_PhpScopera5e5d165d78c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
