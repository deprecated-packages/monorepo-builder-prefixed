<?php

namespace _PhpScoperc53cafc6ca57\Psr\Log;

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
    public function setLogger(\_PhpScoperc53cafc6ca57\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
