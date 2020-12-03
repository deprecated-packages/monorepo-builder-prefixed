<?php

namespace _PhpScoper6c30e6f631ea\Psr\Log;

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
    public function setLogger(\_PhpScoper6c30e6f631ea\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
