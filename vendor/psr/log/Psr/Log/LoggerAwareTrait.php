<?php

namespace _PhpScoperedfa898a454f\Psr\Log;

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
    public function setLogger(\_PhpScoperedfa898a454f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
