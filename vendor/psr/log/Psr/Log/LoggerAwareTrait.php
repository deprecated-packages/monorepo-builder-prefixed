<?php

namespace _PhpScoperc693a7d83f11\Psr\Log;

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
    public function setLogger(\_PhpScoperc693a7d83f11\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
