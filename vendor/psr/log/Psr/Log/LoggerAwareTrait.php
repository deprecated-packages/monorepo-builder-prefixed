<?php

namespace _PhpScoper6d6fbd28d6a9\Psr\Log;

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
    public function setLogger(\_PhpScoper6d6fbd28d6a9\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
