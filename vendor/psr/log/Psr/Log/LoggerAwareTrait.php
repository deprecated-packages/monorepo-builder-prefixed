<?php

namespace _PhpScoper674b08d66902\Psr\Log;

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
    public function setLogger(\_PhpScoper674b08d66902\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
