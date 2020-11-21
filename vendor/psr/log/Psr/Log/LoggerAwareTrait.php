<?php

namespace _PhpScoperb56893078f23\Psr\Log;

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
    public function setLogger(\_PhpScoperb56893078f23\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
