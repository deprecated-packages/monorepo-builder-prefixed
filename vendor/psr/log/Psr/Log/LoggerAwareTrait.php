<?php

namespace _PhpScoperc0c27da9e1f7\Psr\Log;

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
    public function setLogger(\_PhpScoperc0c27da9e1f7\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
