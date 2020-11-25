<?php

namespace _PhpScoper47d898182bf9\Psr\Log;

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
    public function setLogger(\_PhpScoper47d898182bf9\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
