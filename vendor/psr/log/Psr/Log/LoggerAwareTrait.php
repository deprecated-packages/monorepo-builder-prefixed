<?php

namespace _PhpScoper66a1b4bf441c\Psr\Log;

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
    public function setLogger(\_PhpScoper66a1b4bf441c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
