<?php

namespace _PhpScoper87c95ce1b4e5\Psr\Log;

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
    public function setLogger(\_PhpScoper87c95ce1b4e5\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
