<?php

namespace _PhpScoper0677321b414b\Psr\Log;

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
    public function setLogger(\_PhpScoper0677321b414b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
