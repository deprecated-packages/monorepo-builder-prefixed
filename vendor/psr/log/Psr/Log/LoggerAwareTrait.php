<?php

namespace _PhpScoper95e170f0b4ac\Psr\Log;

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
    public function setLogger(\_PhpScoper95e170f0b4ac\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
