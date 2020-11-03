<?php

namespace _PhpScoperc4f6ca029880\Psr\Log;

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
    public function setLogger(\_PhpScoperc4f6ca029880\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
