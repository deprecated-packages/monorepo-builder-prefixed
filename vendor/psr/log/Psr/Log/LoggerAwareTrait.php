<?php

namespace _PhpScoperd9ee792cdaf4\Psr\Log;

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
    public function setLogger(\_PhpScoperd9ee792cdaf4\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
