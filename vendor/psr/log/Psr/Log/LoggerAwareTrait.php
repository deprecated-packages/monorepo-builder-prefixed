<?php

namespace _PhpScoper93a7e58d9dd1\Psr\Log;

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
    public function setLogger(\_PhpScoper93a7e58d9dd1\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
