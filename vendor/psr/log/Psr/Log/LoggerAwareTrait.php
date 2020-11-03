<?php

namespace _PhpScoperf8eaec7affbd\Psr\Log;

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
    public function setLogger(\_PhpScoperf8eaec7affbd\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
