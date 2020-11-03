<?php

namespace _PhpScopera763b4be90d0\Psr\Log;

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
    public function setLogger(\_PhpScopera763b4be90d0\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
