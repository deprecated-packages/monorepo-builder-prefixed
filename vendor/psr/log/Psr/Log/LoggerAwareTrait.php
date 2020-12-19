<?php

namespace _PhpScoper184bc0c88d68\Psr\Log;

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
    public function setLogger(\_PhpScoper184bc0c88d68\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
