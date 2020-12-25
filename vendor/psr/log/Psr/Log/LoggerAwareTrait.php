<?php

namespace _PhpScoperd04ce6546762\Psr\Log;

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
    public function setLogger(\_PhpScoperd04ce6546762\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
