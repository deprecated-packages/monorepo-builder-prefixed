<?php

namespace _PhpScoperf237fc62366a\Psr\Log;

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
    public function setLogger(\_PhpScoperf237fc62366a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
