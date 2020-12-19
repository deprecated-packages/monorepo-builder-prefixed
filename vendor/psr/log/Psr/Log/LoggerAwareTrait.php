<?php

namespace _PhpScoperac0a9a33ae94\Psr\Log;

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
    public function setLogger(\_PhpScoperac0a9a33ae94\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
