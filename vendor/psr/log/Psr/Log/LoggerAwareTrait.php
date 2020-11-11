<?php

namespace _PhpScoperf0b2c071f15d\Psr\Log;

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
    public function setLogger(\_PhpScoperf0b2c071f15d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
