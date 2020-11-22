<?php

namespace _PhpScoper30f4a2553084\Psr\Log;

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
    public function setLogger(\_PhpScoper30f4a2553084\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
