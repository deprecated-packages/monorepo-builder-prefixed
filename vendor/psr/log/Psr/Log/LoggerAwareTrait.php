<?php

namespace _PhpScoper593efff6d962\Psr\Log;

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
    public function setLogger(\_PhpScoper593efff6d962\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
