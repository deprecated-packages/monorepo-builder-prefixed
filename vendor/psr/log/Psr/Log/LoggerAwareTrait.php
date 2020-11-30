<?php

namespace _PhpScoper6da0ff96db02\Psr\Log;

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
    public function setLogger(\_PhpScoper6da0ff96db02\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
