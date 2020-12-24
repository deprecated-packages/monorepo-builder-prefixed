<?php

namespace _PhpScoper7aa910bab0da\Psr\Log;

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
    public function setLogger(\_PhpScoper7aa910bab0da\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
