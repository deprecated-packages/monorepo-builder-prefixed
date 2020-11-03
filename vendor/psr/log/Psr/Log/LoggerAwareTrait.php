<?php

namespace _PhpScoperd6a443964d04\Psr\Log;

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
    public function setLogger(\_PhpScoperd6a443964d04\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
