<?php

namespace _PhpScoperab3ccffcffcd\Psr\Log;

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
    public function setLogger(\_PhpScoperab3ccffcffcd\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
