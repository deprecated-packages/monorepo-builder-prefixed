<?php

namespace _PhpScoperc0b8351d879b\Psr\Log;

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
    public function setLogger(\_PhpScoperc0b8351d879b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
