<?php

namespace _PhpScoper1ceaf4cbd5cb\Psr\Log;

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
    public function setLogger(\_PhpScoper1ceaf4cbd5cb\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
