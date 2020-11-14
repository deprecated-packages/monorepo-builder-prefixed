<?php

namespace _PhpScoper450cfab1c22b\Psr\Log;

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
    public function setLogger(\_PhpScoper450cfab1c22b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
