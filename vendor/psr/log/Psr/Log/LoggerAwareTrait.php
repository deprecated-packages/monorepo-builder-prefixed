<?php

namespace _PhpScoper94f327c48d46\Psr\Log;

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
    public function setLogger(\_PhpScoper94f327c48d46\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
