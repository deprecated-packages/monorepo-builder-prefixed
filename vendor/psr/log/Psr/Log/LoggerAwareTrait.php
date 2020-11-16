<?php

namespace _PhpScoper5da899d87662\Psr\Log;

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
    public function setLogger(\_PhpScoper5da899d87662\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
