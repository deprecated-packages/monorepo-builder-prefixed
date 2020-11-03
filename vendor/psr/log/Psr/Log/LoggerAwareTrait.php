<?php

namespace _PhpScopera2c403aec9a8\Psr\Log;

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
    public function setLogger(\_PhpScopera2c403aec9a8\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
