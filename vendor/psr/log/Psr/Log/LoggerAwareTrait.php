<?php

namespace _PhpScoper88e2bb777a57\Psr\Log;

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
    public function setLogger(\_PhpScoper88e2bb777a57\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
