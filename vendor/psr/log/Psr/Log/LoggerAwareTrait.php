<?php

namespace _PhpScoperc1a0b7b3175f\Psr\Log;

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
    public function setLogger(\_PhpScoperc1a0b7b3175f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
