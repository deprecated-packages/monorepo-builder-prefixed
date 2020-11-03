<?php

namespace _PhpScoper9b7e9beaf949\Psr\Log;

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
    public function setLogger(\_PhpScoper9b7e9beaf949\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
