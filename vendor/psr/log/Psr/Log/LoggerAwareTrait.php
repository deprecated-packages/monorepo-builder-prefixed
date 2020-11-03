<?php

namespace _PhpScoper3e1a86bff77f\Psr\Log;

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
    public function setLogger(\_PhpScoper3e1a86bff77f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
