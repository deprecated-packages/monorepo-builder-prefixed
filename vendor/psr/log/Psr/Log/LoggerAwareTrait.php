<?php

namespace _PhpScoperf7284855206a\Psr\Log;

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
    public function setLogger(\_PhpScoperf7284855206a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
