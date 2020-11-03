<?php

namespace _PhpScoperb3e4472dbe9b\Psr\Log;

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
    public function setLogger(\_PhpScoperb3e4472dbe9b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
