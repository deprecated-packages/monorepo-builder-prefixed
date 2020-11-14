<?php

namespace _PhpScoperef4638f5d8b1\Psr\Log;

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
    public function setLogger(\_PhpScoperef4638f5d8b1\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
