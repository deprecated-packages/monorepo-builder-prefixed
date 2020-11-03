<?php

namespace _PhpScoper323d4c178bee\Psr\Log;

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
    public function setLogger(\_PhpScoper323d4c178bee\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
