<?php

namespace _PhpScopereb9e28d9f307\Psr\Log;

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
    public function setLogger(\_PhpScopereb9e28d9f307\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
