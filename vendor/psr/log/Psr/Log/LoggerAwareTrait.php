<?php

namespace _PhpScoper27e2e7523871\Psr\Log;

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
    public function setLogger(\_PhpScoper27e2e7523871\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
