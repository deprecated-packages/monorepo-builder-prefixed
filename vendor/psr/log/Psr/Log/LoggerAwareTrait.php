<?php

namespace _PhpScoper6bfbe5ea8949\Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /**
     * The logger instance.
     *
     * @var LoggerInterface
     */
    protected $logger;
    /**
     * Sets a logger.
     *
     * @param LoggerInterface $logger
     */
    public function setLogger(\_PhpScoper6bfbe5ea8949\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
