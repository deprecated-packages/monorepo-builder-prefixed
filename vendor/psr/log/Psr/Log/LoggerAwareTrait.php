<?php

namespace _PhpScoper8e7700b08cb9\Psr\Log;

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
    public function setLogger(\_PhpScoper8e7700b08cb9\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
