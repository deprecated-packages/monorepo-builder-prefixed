<?php

namespace _PhpScopere4e8aecb81b9\Psr\Log;

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
    public function setLogger(\_PhpScopere4e8aecb81b9\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
