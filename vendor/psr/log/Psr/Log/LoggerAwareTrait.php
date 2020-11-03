<?php

namespace _PhpScoperf1163522a13e\Psr\Log;

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
    public function setLogger(\_PhpScoperf1163522a13e\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
