<?php

namespace _PhpScoper9a3298f96fa4\Psr\Log;

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
    public function setLogger(\_PhpScoper9a3298f96fa4\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
