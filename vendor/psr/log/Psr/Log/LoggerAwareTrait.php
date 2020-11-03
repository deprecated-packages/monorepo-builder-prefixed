<?php

namespace _PhpScoperc00d4390f333\Psr\Log;

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
    public function setLogger(\_PhpScoperc00d4390f333\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
