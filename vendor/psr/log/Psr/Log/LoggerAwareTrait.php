<?php

namespace _PhpScoperdbf49b510e11\Psr\Log;

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
    public function setLogger(\_PhpScoperdbf49b510e11\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
