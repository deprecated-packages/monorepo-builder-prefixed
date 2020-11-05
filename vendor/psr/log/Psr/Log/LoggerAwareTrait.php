<?php

namespace _PhpScoper22d98a58be40\Psr\Log;

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
    public function setLogger(\_PhpScoper22d98a58be40\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
