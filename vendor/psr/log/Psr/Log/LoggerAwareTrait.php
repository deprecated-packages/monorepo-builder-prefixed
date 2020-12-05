<?php

namespace _PhpScoper37b79542cc43\Psr\Log;

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
    public function setLogger(\_PhpScoper37b79542cc43\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
