<?php

namespace _PhpScoper43009128da38\Psr\Log;

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
    public function setLogger(\_PhpScoper43009128da38\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
