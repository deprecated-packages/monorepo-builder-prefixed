<?php

namespace _PhpScoper354754c20063\Psr\Log;

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
    public function setLogger(\_PhpScoper354754c20063\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
