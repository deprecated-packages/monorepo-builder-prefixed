<?php

namespace _PhpScoper8068fe8d25a3\Psr\Log;

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
    public function setLogger(\_PhpScoper8068fe8d25a3\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
