<?php

namespace _PhpScoper7609e473a4cb\Psr\Log;

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
    public function setLogger(\_PhpScoper7609e473a4cb\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
