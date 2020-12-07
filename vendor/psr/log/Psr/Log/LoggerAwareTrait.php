<?php

namespace _PhpScoper897dcdb71069\Psr\Log;

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
    public function setLogger(\_PhpScoper897dcdb71069\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
