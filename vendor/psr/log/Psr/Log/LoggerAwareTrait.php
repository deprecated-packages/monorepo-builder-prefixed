<?php

namespace _PhpScoperc9dc9dec1b4a\Psr\Log;

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
    public function setLogger(\_PhpScoperc9dc9dec1b4a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
