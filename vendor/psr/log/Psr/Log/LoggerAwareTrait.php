<?php

namespace _PhpScoperf701e46e48a5\Psr\Log;

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
    public function setLogger(\_PhpScoperf701e46e48a5\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
