<?php

namespace _PhpScoperee3ad0c2c096\Psr\Log;

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
    public function setLogger(\_PhpScoperee3ad0c2c096\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
