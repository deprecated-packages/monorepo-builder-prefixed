<?php

namespace _PhpScoper4c229f9734b6\Psr\Log;

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
    public function setLogger(\_PhpScoper4c229f9734b6\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
