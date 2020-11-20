<?php

namespace _PhpScoperabca9a64438b\Psr\Log;

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
    public function setLogger(\_PhpScoperabca9a64438b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
