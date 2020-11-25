<?php

namespace _PhpScoperfa8ac9431c57\Psr\Log;

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
    public function setLogger(\_PhpScoperfa8ac9431c57\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
