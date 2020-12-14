<?php

namespace _PhpScoperc9dee8f3b3e7\Psr\Log;

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
    public function setLogger(\_PhpScoperc9dee8f3b3e7\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
