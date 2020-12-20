<?php

namespace _PhpScoper6b92aa0ec16f\Psr\Log;

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
    public function setLogger(\_PhpScoper6b92aa0ec16f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
