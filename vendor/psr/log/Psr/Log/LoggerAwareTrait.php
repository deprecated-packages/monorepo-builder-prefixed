<?php

namespace _PhpScoper31c74f11c4b8\Psr\Log;

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
    public function setLogger(\_PhpScoper31c74f11c4b8\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
