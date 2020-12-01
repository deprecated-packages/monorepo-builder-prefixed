<?php

namespace _PhpScoper46d05083fbc3\Psr\Log;

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
    public function setLogger(\_PhpScoper46d05083fbc3\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
