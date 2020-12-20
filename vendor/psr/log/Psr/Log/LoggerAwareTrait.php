<?php

namespace _PhpScoper0217ecc5969a\Psr\Log;

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
    public function setLogger(\_PhpScoper0217ecc5969a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
