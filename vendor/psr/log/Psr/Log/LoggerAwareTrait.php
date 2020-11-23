<?php

namespace _PhpScoper9693ff52999d\Psr\Log;

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
    public function setLogger(\_PhpScoper9693ff52999d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
