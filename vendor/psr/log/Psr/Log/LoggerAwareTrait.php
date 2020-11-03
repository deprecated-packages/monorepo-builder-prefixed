<?php

namespace _PhpScopera42d72b2de70\Psr\Log;

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
    public function setLogger(\_PhpScopera42d72b2de70\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
