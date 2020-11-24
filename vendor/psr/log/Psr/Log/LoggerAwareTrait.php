<?php

namespace _PhpScoper963537526adf\Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /** @var LoggerInterface */
    protected $logger;
    /**
     * Sets a logger.
     * 
     * @param LoggerInterface $logger
     */
    public function setLogger(\_PhpScoper963537526adf\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
