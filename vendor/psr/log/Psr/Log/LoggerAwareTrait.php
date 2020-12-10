<?php

namespace _PhpScoperf4d251e01a80\Psr\Log;

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
    public function setLogger(\_PhpScoperf4d251e01a80\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
