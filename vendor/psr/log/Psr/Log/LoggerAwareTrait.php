<?php

namespace _PhpScoper53a6895b9c5b\Psr\Log;

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
    public function setLogger(\_PhpScoper53a6895b9c5b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
