<?php

namespace _PhpScoper57793da194f3\Psr\Log;

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
    public function setLogger(\_PhpScoper57793da194f3\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
