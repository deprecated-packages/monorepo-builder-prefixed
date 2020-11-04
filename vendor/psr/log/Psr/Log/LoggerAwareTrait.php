<?php

namespace _PhpScoper9122d33f3e27\Psr\Log;

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
    public function setLogger(\_PhpScoper9122d33f3e27\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
