<?php

namespace _PhpScoper69b0f14b2eca\Psr\Log;

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
    public function setLogger(\_PhpScoper69b0f14b2eca\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
