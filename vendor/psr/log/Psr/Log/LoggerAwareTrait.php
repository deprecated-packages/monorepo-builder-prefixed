<?php

namespace _PhpScoperb15c77d6bb3b\Psr\Log;

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
    public function setLogger(\_PhpScoperb15c77d6bb3b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
