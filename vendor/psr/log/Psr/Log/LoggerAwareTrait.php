<?php

namespace _PhpScoper130e101f3ca6\Psr\Log;

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
    public function setLogger(\_PhpScoper130e101f3ca6\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
