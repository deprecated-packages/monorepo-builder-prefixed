<?php

namespace _PhpScoper7371f586a1d2\Psr\Log;

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
    public function setLogger(\_PhpScoper7371f586a1d2\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
