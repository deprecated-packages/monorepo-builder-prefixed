<?php

namespace _PhpScoper5665d3e54f4c\Psr\Log;

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
    public function setLogger(\_PhpScoper5665d3e54f4c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
