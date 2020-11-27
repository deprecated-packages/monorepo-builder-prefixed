<?php

namespace _PhpScoper5818bcaf1010\Psr\Log;

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
    public function setLogger(\_PhpScoper5818bcaf1010\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
