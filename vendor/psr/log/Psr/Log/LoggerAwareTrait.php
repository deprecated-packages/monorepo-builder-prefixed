<?php

namespace _PhpScoper485f3a9238ad\Psr\Log;

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
    public function setLogger(\_PhpScoper485f3a9238ad\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
