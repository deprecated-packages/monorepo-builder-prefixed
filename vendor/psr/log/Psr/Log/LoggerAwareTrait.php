<?php

namespace _PhpScoper138e2990dbdb\Psr\Log;

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
    public function setLogger(\_PhpScoper138e2990dbdb\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
