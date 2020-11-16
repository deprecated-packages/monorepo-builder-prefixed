<?php

namespace _PhpScoper716f383f1097\Psr\Log;

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
    public function setLogger(\_PhpScoper716f383f1097\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
