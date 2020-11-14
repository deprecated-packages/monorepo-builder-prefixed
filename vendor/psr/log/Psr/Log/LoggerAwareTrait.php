<?php

namespace _PhpScoperae7532b8c744\Psr\Log;

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
    public function setLogger(\_PhpScoperae7532b8c744\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
