<?php

namespace _PhpScoperf40000691b7b\Psr\Log;

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
    public function setLogger(\_PhpScoperf40000691b7b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
