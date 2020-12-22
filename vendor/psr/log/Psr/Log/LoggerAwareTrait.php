<?php

namespace _PhpScoper8e5d8d76215d\Psr\Log;

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
    public function setLogger(\_PhpScoper8e5d8d76215d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
