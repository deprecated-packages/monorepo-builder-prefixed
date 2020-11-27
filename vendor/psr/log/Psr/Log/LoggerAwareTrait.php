<?php

namespace _PhpScoper7d1be3c5de07\Psr\Log;

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
    public function setLogger(\_PhpScoper7d1be3c5de07\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
