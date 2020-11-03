<?php

namespace _PhpScoper9022b927643b\Psr\Log;

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
    public function setLogger(\_PhpScoper9022b927643b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
