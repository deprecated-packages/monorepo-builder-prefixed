<?php

namespace _PhpScoper8d3e33bd2be8\Psr\Log;

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
    public function setLogger(\_PhpScoper8d3e33bd2be8\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
