<?php

namespace _PhpScoper7d795aa8de8d\Psr\Log;

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
    public function setLogger(\_PhpScoper7d795aa8de8d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
