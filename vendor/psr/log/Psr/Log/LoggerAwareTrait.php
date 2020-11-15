<?php

namespace _PhpScoper0fa0b2363a34\Psr\Log;

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
    public function setLogger(\_PhpScoper0fa0b2363a34\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
