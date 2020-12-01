<?php

namespace _PhpScoperc4633daa1458\Psr\Log;

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
    public function setLogger(\_PhpScoperc4633daa1458\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
