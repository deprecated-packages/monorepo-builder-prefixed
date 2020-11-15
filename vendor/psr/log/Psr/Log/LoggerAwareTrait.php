<?php

namespace _PhpScoperb25e75e9febe\Psr\Log;

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
    public function setLogger(\_PhpScoperb25e75e9febe\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
