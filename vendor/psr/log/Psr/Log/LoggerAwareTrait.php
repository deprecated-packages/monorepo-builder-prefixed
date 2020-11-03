<?php

namespace _PhpScoper61d2aa534566\Psr\Log;

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
    public function setLogger(\_PhpScoper61d2aa534566\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
