<?php

namespace _PhpScoperef96225926e2\Psr\Log;

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
    public function setLogger(\_PhpScoperef96225926e2\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
