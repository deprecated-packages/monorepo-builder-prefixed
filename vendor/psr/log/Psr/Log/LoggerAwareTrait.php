<?php

namespace _PhpScoperc86a79e2d6b2\Psr\Log;

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
    public function setLogger(\_PhpScoperc86a79e2d6b2\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
