<?php

namespace _PhpScoper0087e037e0f7\Psr\Log;

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
    public function setLogger(\_PhpScoper0087e037e0f7\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
