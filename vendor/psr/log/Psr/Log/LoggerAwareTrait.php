<?php

namespace _PhpScoper8b183f8218dc\Psr\Log;

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
    public function setLogger(\_PhpScoper8b183f8218dc\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
