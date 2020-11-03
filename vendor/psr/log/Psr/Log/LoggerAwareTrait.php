<?php

namespace _PhpScoperdd9048e10aae\Psr\Log;

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
    public function setLogger(\_PhpScoperdd9048e10aae\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
