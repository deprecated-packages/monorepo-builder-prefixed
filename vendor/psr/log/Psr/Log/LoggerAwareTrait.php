<?php

namespace _PhpScoper860bc98a0f96\Psr\Log;

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
    public function setLogger(\_PhpScoper860bc98a0f96\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
