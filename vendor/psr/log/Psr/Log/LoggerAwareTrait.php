<?php

namespace _PhpScoper7b254e6a7108\Psr\Log;

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
    public function setLogger(\_PhpScoper7b254e6a7108\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
