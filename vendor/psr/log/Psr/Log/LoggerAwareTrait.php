<?php

namespace _PhpScoper68683f91c63d\Psr\Log;

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
    public function setLogger(\_PhpScoper68683f91c63d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
