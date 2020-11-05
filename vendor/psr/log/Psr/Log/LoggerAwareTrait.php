<?php

namespace _PhpScoperfd1a6a0ee9af\Psr\Log;

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
    public function setLogger(\_PhpScoperfd1a6a0ee9af\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
