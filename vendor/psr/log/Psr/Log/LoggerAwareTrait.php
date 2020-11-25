<?php

namespace _PhpScoper54d694ea578e\Psr\Log;

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
    public function setLogger(\_PhpScoper54d694ea578e\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
