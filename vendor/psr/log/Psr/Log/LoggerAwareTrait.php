<?php

namespace _PhpScoperabb8c88e9df1\Psr\Log;

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
    public function setLogger(\_PhpScoperabb8c88e9df1\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
