<?php

namespace _PhpScopercd5c1af09a49\Psr\Log;

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
    public function setLogger(\_PhpScopercd5c1af09a49\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
