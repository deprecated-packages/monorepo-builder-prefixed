<?php

namespace _PhpScoper2f1e52375c65\Psr\Log;

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
    public function setLogger(\_PhpScoper2f1e52375c65\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
