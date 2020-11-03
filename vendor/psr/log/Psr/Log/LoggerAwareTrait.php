<?php

namespace _PhpScoper9b905ab040d4\Psr\Log;

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
    public function setLogger(\_PhpScoper9b905ab040d4\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
