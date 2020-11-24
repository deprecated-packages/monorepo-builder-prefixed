<?php

namespace _PhpScoper0f23ef1f1d10\Psr\Log;

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
    public function setLogger(\_PhpScoper0f23ef1f1d10\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
