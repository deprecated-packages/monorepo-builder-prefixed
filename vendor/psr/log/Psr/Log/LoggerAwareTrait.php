<?php

namespace _PhpScoper6b2f62f5c7a4\Psr\Log;

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
    public function setLogger(\_PhpScoper6b2f62f5c7a4\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
