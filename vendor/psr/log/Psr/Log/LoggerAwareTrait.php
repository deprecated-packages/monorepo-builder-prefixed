<?php

namespace _PhpScoper37887d2f9246\Psr\Log;

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
    public function setLogger(\_PhpScoper37887d2f9246\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
