<?php

namespace _PhpScoper9fc59dd81894\Psr\Log;

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
    public function setLogger(\_PhpScoper9fc59dd81894\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
